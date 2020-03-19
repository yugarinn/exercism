<?php

class School
{
    private $roster = [];

    public function add(string $student, int $grade)
    {
        if (!isset($this->roster[$grade])) {
            $this->roster[$grade] = [];
        }

        $this->roster[$grade][] = $student;
    }

    public function grade(int $grade)
    {
        return $this->roster[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical()
    {
        $sortedRoster = $this->roster;

        ksort($sortedRoster);
        foreach ($sortedRoster as &$grade) {
            sort($grade);
        }

        return $sortedRoster;
    }
}
