<?php declare(strict_types=1);

namespace KataTests;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function convertion() {
        return [
            'given_1_then_return_1' => [1, '1'],
            'given_2_then_return_2' => [2, '2'],
            'given_3_then_return_fizz' => [3, 'Fizz'],
            'given_4_then_return_4' => [4, '4'],
        ];
    }

    /** @test
     * @dataProvider convertion
     */
    public function given_a_number_then_return_fizz_or_buzz_or_fizzbuzz_or_the_same_number_as_a_string($number, $expected): void
    {
        $game = new FizzBuzz();

        $result = $game->convert($number);

        self::assertEquals($expected, $result);
    }

}
