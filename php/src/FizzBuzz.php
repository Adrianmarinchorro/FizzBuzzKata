<?php declare(strict_types=1);

namespace Kata;

class FizzBuzz
{
    public function convert(int $number): string
    {
        if ($this->isMultipleOf3And5($number)) return 'FizzBuzz';
        
        if ($this->isMultipleOf5($number)) return 'Buzz';

        if ($this->isMultipleOf3($number)) return 'Fizz';

        return (string) $number;
    }

    public function isMultipleOf3And5(int $number): bool
    {
        return $number % 3 === 0 && $number % 5 === 0;
    }

    public function isMultipleOf5(int $number): bool
    {
        return $number % 5 === 0;
    }

    public function isMultipleOf3(int $number): bool
    {
        return $number % 3 === 0;
    }
}
