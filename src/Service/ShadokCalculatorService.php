<?php

namespace App\Service;

use App\Enum\ShadokSyllablesEnum;

class ShadokCalculatorService
{
    public static function calculateShadokNumberFromHumanNumber(int $humanNumber): string
    {
        $shadokNumber = '';

        $tmpNum = (int)floor($humanNumber / 4);
        dump($tmpNum);

        for ($i = 0; $i < $tmpNum; $i++) {
            dump($i);
            dump($tmpNum);
            $shadokNumber = self::findUniqueShadokSyllable($i) . ' ';
            $humanNumber  -= 4;
        }

        if ($humanNumber < 4) {
            $shadokNumber .= self::findUniqueShadokSyllable($humanNumber);
        }

        return $shadokNumber;
    }

    private static function findUniqueShadokSyllable(int $key): string
    {
        return ShadokSyllablesEnum::SHADOKS_SYLLABLES[$key];
    }
}
