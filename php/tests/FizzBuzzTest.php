<?php declare(strict_types=1);

namespace KataTests;

use Kata\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function given_1_then_return_1(): void
    {
        $game = new FizzBuzz();

        $result = $game->convert(1);

        self::assertEquals(1, $result);
    }
}
