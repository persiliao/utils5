<?php
/**
 * @author Persi.Liao
 * @date   2023/9/3
 */

namespace PersiLiao\Utils;

use InvalidArgumentException;

class Excel {

    /**
     * The number of columns is changed to the name of the column
     *
     * @param int $number Number of columns
     *
     * @return string
     */
    public static function numberCovertLetter($number) {
        if ($number <= 0) {
            throw new InvalidArgumentException('The number must be greater than 0');
        } else {
            $str = '';
            while ($number > 0) {
                $res = $number % 26;
                if ($res == 0) {
                    $res = 26;
                }
                $str = strtoupper(chr($res + 64)) . $str;
                $number = ($number - $res) / 26;
            }

            return $str;
        }
    }

    /**
     *
     * @param int $numbers Number of columns
     *
     * @return string[]
     */
    public static function numbersCovertLetter($numbers) {
        $letters = [];
        for ($number = 1; $number <= $numbers; $number++) {
            $letters[] = self::numberCovertLetter($number);
        }
        return $letters;
    }
}
