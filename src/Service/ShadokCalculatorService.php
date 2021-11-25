<?php

namespace App\Service;

use App\Enum\ShadokSyllablesEnum;

class ShadokCalculatorService
{
    public static function calculateShadokNumberFromHumanNumber(int $humanNumber): string
    {
        $shadokNumber = '';
        $base4Number = base_convert((string) $humanNumber, 10, 4);
        $unitNumbers = str_split($base4Number, 1);

        foreach ($unitNumbers as $number) {
            $shadokNumber .= self::findUniqueShadokSyllable((int) $number) . ' ';
        }

        return trim($shadokNumber);
    }

    private static function findUniqueShadokSyllable(int $key): string
    {
        return ShadokSyllablesEnum::SHADOKS_SYLLABLES[$key];
    }
}
