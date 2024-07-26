<?php

namespace Php\Package;

// Эта функция переворачивает переданную строку
function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}

function reverseString2($string)
{
    return implode(array_reverse(str_split($string)));
}