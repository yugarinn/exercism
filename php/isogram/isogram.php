<?php

const ALLOWED_EXCEPTIONS = ['-', ' '];

function isIsogram(string $word) {
    $meetsConditions = true;
    $characters = preg_split('//u', strtolower($word), -1, PREG_SPLIT_NO_EMPTY);
    $occurrences = array_count_values($characters);

    foreach ($occurrences as $character => $times) {
        if (! in_array($character, ALLOWED_EXCEPTIONS) && $times > 1) {
            $meetsConditions = false;
            break;
        }
    }

    return $meetsConditions;
}
