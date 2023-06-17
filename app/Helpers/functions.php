<?php

function ttt($value): array
{
    return [
        'en' => $value,
        'de' => $value,
        'es' => $value,
        'fr' => $value,
        'it' => $value,
    ];
}

function getNameInitial(string $name): string
{
    preg_match_all('/\b\w/u', $name, $matches);

    return strtoupper(implode('', $matches[0]));
}
