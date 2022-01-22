<?php

function is_twins(string $original ,string $toCompare): bool
{
    if (empty($original) || empty($toCompare))
    {
        throw new Exception('Two variables must non nullable');
    }
    return (count_chars(strtolower($original), 1) === count_chars(strtolower($toCompare), 1));
}
$value = is_twins('', 'Aaaonnnn');
var_dump($value);