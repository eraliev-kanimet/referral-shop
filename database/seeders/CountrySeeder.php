<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Country::count()) {
            foreach ($this->data() as $data) {
                $states = [];

                foreach ($data['states'] as $code => $state) {
                    $states[] = [
                        'name' => ttt($state),
                        'code' => $code,
                    ];
                }

                Country::create([
                    'name' => ttt($data['name']),
                    'code' => $data['code'],
                    'dial_code' => $data['dial_code'],
                    'states' => $states
                ]);
            }
        } else {
            print "  Countries exist\n";
        }
    }

    protected function data()
    {
        return json_decode(file_get_contents(storage_path('fake/countries.json')), true);
    }
}
