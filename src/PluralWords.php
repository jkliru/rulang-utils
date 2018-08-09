<?php

namespace RuLangUtils;

/**
 * Class PluralWords
 * @package RuLangUtils
 */
class PluralWords
{
    /**
     * Определение правильной формы существительного после числительного
     *
     * @param int $number - число
     * @param array $wordForms - массив словоформ ["[1] деталь", "[2] детали", "[5] деталей"]
     * @return string
     */
    public static function getPluralWord(int $number, array $wordForms): string {
        $cases =[2, 0, 1, 1, 1, 2];

        return $wordForms[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
    }
}