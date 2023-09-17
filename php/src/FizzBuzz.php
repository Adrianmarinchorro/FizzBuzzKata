<?php declare(strict_types=1);

namespace Kata;

class FizzBuzz
{
    public function convert(int $number): string
    {
        if ($number === 5) return 'Buzz';

        if ($number === 3 || $number === 6) return 'Fizz';

        return (string) $number;
    }
}
