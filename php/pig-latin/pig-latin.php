<?php

class Pigifier
{
    const VOWELS = ['a', 'e', 'i', 'o', 'u'];

    public function parse(string $sentence)
    {
        $words = explode(' ', $sentence);

        foreach ($words as $index => $word) {
            unset($words[$index]);
            $words[] = $this->pigify($word);
        }

        return implode(' ', $words);
    }

    private function pigify(string $word)
    {
        $characters = str_split($word);
        $charactersToAppend = [];

        foreach ($characters as $index => $current) {
            $next = $characters[$index + 1];

            if ($this->shouldStop($index, $current, $next)) {
                break;
            } else {
                if ($current == 'q' && $next == 'u') {
                    $charactersToAppend[] = $current;
                    $charactersToAppend[] = $next;
                    unset($characters[$index]);
                    unset($characters[$index + 1]);
                } else {
                    $charactersToAppend[] = $current;
                    unset($characters[$index]);
                }
            }
        }

        return $this->glue($characters, $charactersToAppend);
    }

    private function shouldStop(int $index, string $current, string $next)
    {
        return (
            (in_array($current, self::VOWELS) && !$index) || // the first character is a vowel
            (in_array($current, self::VOWELS) && $index)  || // a vowel is found mid word
            ($current == 'y' && $next == 't') || // IDK if these two cases are the only ones or it should be generalized somehow
            ($current == 'x' && $next == 'r')
        );
    }

    private function glue(array $characters, array $toAppend)
    {
        return implode('', $characters) . implode('', $toAppend) . 'ay';
    }
}

function translate(string $sentence)
{
    return (new Pigifier())->parse($sentence);
}
