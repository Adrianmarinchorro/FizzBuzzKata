<?php declare(strict_types=1);

namespace Kata;

class FizzBuzz
{
    public function convert(int $number): string
    {

        if ($number === 3) return 'Fizz';

        if ($number == 1) return '1';

        return '2';
    }
}
