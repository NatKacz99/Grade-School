<?php

declare(strict_types=1);

class School
{
    public function add(string $name, int $grade): void
    {
        $this->students[$grade][] = $name;
    }

    public function grade($grade) : array
    {
        return $this->students[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical(): array
    {
        ksort($this->students);
        return array_map(function($grade){
            sort($grade);
            return $grade; 
        }, $this->students);
    }
}