<?php

namespace App\Helper;

trait StringModify
{
    private function generateNumber($num)
    {
        return str_pad(mt_rand(10000000, 99999999), $num, '0', STR_PAD_LEFT);
    }
}
