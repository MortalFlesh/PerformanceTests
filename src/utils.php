<?php declare(strict_types=1);

namespace MF\Performance;

class Utils
{
    public const isPrime = __NAMESPACE__ . '\isPrime';
}

function isPrime(int $n): bool
{
    return check(2, $n);
}

function check(int $i, int $n)
{
    return $i > $n / 2 || ($n % $i !== 0 && check($i + 1, $n));
}
