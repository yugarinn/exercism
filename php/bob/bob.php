<?php

class Bob
{
    public function __construct()
    {
        $this->answers = [
            'question'        => 'Sure.',
            'yelling'         => 'Whoa, chill out!',
            'yellingQuestion' => 'Calm down, I know what I\'m doing!',
            'silence'         => 'Fine. Be that way!',
            'fallback'        => 'Whatever.',
        ];
    }

    public function respondTo(string $input)
    {
        return $this->answers[$this->getInputType($input)];
    }

    private function getInputType(string $input)
    {
        if ($this->isQuestion($input) && $this->isYelling($input)) {
            return 'yellingQuestion';
        }

        if ($this->isQuestion($input)) {
            return 'question';
        }

        if ($this->isSilent($input)) {
            return 'silence';
        }

        if ($this->isYelling($input)) {
            return 'yelling';
        }

        return 'fallback';
    }

    private function isQuestion(string $input)
    {
        $input = preg_replace("/[^A-Za-z\?]/", '', $input);

        return (mb_substr($input, -1) == '?');
    }

    private function isYelling(string $input)
    {
        if (preg_replace("/[^0-9,.!?\(\)\[\]: ]/", "", $input) == $input) {
            return false;
        }

        $input = preg_replace("/[^A-Za-z0-9\?]/", '', $input);

        return (strtoupper($input) == $input);
    }

    private function isSilent(string $input)
    {
        return !(bool) str_replace([' ', "\t"], '', $input);
    }
}
