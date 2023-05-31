<?php

namespace App\Console\Commands\App;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem as File;
use Illuminate\Support\Str;
use InvalidArgumentException;

class LangToJsonCommand extends Command
{
    protected $signature = 'lang:js';

    private File $file;

    public function __construct()
    {
        parent::__construct();

        $this->file = app('files');
    }

    /**
     * @throws Exception
     */
    public function handle(): void
    {
        $target = resource_path('vue/plugins/i18n/messages.json');

        if ($this->generate($target)) {
            $this->info("Created: $target");

            return;
        }

        $this->error("Could not create: $target");
    }

    /**
     * @throws Exception
     */
    private function generate($target): bool|int
    {
        $messages = $this->getMessages();

        $this->prepareTarget($target);

        return $this->file->put($target, $messages);

    }

    /**
     * @throws Exception
     */
    private function getMessages(): string
    {
        $messages = [];
        $path = base_path('lang');

        if (!$this->file->exists($path)) {
            throw new Exception("$path doesn't exists!");
        }

        foreach ($this->file->allFiles($path) as $file) {
            $pathName = $file->getRelativePathName();

            $extension = $this->file->extension($pathName);
            if ($extension != 'php' && $extension != 'json') {
                continue;
            }

            $key = substr($pathName, 0, -4);
            $key = str_replace('\\', '.', $key);
            $key = str_replace('/', '.', $key);


            if (Str::startsWith($key, 'vendor')) {
                $key = $this->getVendorKey($key);
            }

            [$lang, $domain] = explode('.', $key);

            $fullPath = $path.DIRECTORY_SEPARATOR.$pathName;
            if ($extension == 'php') {
                $messages[$lang][$domain] = include $fullPath;
            } else {
                $key = $lang . $domain . 'strings';
                $fileContent = file_get_contents($fullPath);
                $messages[$key] = json_decode($fileContent, true);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    throw new InvalidArgumentException('Error while decode ' . basename($fullPath) . ': ' . json_last_error_msg());
                }
            }
        }

        $messagesString = json_encode($messages);
        $placeholders = Str::matchAll('/:[a-zA-Z_]+\s/', $messagesString)->unique()->toArray();

        $replaces = [];

        foreach ($placeholders as $placeholder) {
            $replaces[] = Str::replace([':', ' '], ['{', '} '], $placeholder);
        }

        return Str::replace($placeholders, $replaces, $messagesString);
    }

    private function prepareTarget($target): void
    {
        $dirname = dirname($target);

        if (!$this->file->exists($dirname)) {
            $this->file->makeDirectory($dirname, 0755, true);
        }
    }

    private function getVendorKey($key): string
    {
        $keyParts = explode('.', $key, 4);
        unset($keyParts[0]);

        return $keyParts[2] .'.'. $keyParts[1] . '::' . $keyParts[3];
    }
}
