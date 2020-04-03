<?php

const DNA_RNA_MAP = [
    'G' => 'C',
    'C' => 'G',
    'T' => 'A',
    'A' => 'U',
];

function toRna(string $strand) {
    return implode(array_map(function ($nucleotide) {
        return DNA_RNA_MAP[$nucleotide];
    }, str_split($strand)));
}
