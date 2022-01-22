<?php

function is_twins(string $original ,string $toCompare): bool{
    if (empty($original !== '' || empty($toCompare)))
    {
        return false;
    }
    if ( strlen($original) != strlen($toCompare))
    {
        return false;
    }

    $originalArray = count_chars(strtolower($original), 1);
    $toCompareArray = count_chars(strtolower($toCompare), 1);

    if (count($originalArray) != count($toCompareArray)) {
        return false;
    }

    if (count($originalArray) == count($toCompareArray)) {
//        $sortedOriginKey = ksort($originalArray);
//        $sortedCompareKey = ksort($toCompareArray);
        if ($originalArray === $toCompareArray) {
            return true;
        } else {
            return false;
        }
    }
    return false;

}

$value = is_twins('Onnaaann', 'Aaaonnnn');
var_dump($value);