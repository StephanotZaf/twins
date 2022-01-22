<?php

function is_twins(string $original ,string $toCompare): bool
{
    return (count_chars(strtolower($original), 1) === count_chars(strtolower($toCompare), 1));
}
$value = is_twins('Onnaaann', 'Aaaonnnn');
var_dump($value);