<?php

class RomanNumeralsConverter
{
    protected static $lookupMap = [
        100 => 'C',
        50 => 'L',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];

    public function convert($number)
    {
        $result = '';

        foreach(static::$lookupMap as $limit => $roman) {
            while ($number >= $limit) {
                $result .= $roman;
                $number -= $limit;
            }
        }

        return $result;
    }
}
