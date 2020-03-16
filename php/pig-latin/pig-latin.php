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

        foreach ($characters as $index => $character) {
            if ($this->shouldStop($index, $character)) {
                break;
            } else {
                $charactersToAppend[] = $characters[$index];
                unset($characters[$index]);
            }
        }

        return $this->glue($characters, $charactersToAppend);
    }

    private function shouldStop(int $index, string $character)
    {
        return (
            (in_array($character, self::VOWELS) && !$index) || // the first character is a vowel
            (in_array($character, self::VOWELS) && $index)    // a vowel is found mid word
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
