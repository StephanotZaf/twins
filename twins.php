<?php

function is_twins(string $original ,string $toCompare){
    if ( strlen($original) != strlen($toCompare))
    {
        echo 'The two string has not same length';
    }

    $originalArray = count_chars($original, 1);
    $toCompareArray = count_chars($toCompare, 1);

    if (count($originalArray) != count($toCompareArray)) {
        echo 'Character grouped is not same length';
    }

    if (count($originalArray) == count($toCompareArray)) {
//        $sortedOriginKey = ksort($originalArray);
//        $sortedCompareKey = ksort($toCompareArray);
        if ($originalArray === $toCompareArray) {
            var_dump($originalArray);
            var_dump($toCompareArray);
            echo 'twins';
        } else {
            echo 'not twins but contains same number of characters and same number of grouped caracters';
        }
    }

}

is_twins('nonaaann', 'aaaonnnn');