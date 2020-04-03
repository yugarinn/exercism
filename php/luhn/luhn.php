<?php

function isValid(string $candidate) {
    $sanitized = array_reverse(preg_filter('/[1-9]/', '$0', str_split($candidate)));
    $checksum = [];

    foreach ($sanitized as $index => $digit) {
        if ($index % 2 > 0) {
            $digit = $digit * 2;

            if ($digit > 9) {
                $digit = $digit % 9;
            }
        }

        $checksum[] = $digit;
    }

    return count($checksum) && ! (array_sum($checksum) % 10);
}
