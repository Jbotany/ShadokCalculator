<?php

namespace App\Service;

use App\Enum\ShadokSyllablesEnum;

class ShadokCalculatorService
{
    public static function humanNumberToShadokNumber(string $humanNumber): string
    {
        $shadokNumber = '';
        $base4Number = base_convert((string) $humanNumber, 10, 4);
        $unitNumbers = str_split($base4Number, 1);

        foreach ($unitNumbers as $number) {
            $shadokNumber .= ShadokSyllablesEnum::SHADOKS_SYLLABLES[$number] . ' ';
        }

        return trim($shadokNumber);
    }
}
