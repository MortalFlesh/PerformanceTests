<?php declare(strict_types=1);

use MF\Collection\Immutable\Seq;

require_once __DIR__ . '/../vendor/autoload.php';

ini_set('xdebug.max_nesting_level', '500');

$counter = 0;

$first100PrimeNumbers = Seq::init(
    function () {
        yield 1;
        yield 2;
        yield from Seq::range('3..2..Inf');
    }
)
    ->map(function ($i) use (&$counter) {
        $counter++;

        return $i;
    })
    ->filter(\MF\Performance\Utils::isPrime)
    ->take(100)
    ->toArray();

var_dump($counter, implode('; ', $first100PrimeNumbers));
