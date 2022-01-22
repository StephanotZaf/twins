<?php

function is_twins(string $original ,string $toCompare): bool
{
    return count_chars(strtolower($a), 1) === count_chars(strtolower($b), 1);
}

is_twins('nonaaann', 'aaaonnnn');
