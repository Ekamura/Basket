<?php


namespace App\Models;


class ShowData
{
    public static function showDate($date, $format = 'd.m.Y')
    {
        return date($format, strtotime($date));
    }

    public static function showText($date, $length = 100, $symbols = '...')
    {
        return mb_substr($date, 0, $length) . $symbols;
    }
}