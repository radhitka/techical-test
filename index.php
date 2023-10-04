<?php

function isPrime($number): bool
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function convertToText($number, $first, $last): string | int
{
    if ($number % $first == 0 && $number % $last == 0) {
        return 'FooBar';
    }

    if ($number % $first == 0) {
        return 'Foo';
    }

    if ($number % $last == 0) {
        return 'Bar';
    }

    return $number;
}

function findNonPrimes($start, $end): array
{
    $nonPrimes = [];

    for ($i = $start; $i >= $end; $i--) {
        if (!isPrime($i)) {
            $nonPrimes[] = convertToText($i, 3, 5);
        }
    }

    return $nonPrimes;
}

$start = 100;
$end = 1;

$nonPrimes = findNonPrimes(100, 1);

$msg = "Bilangan non-prima dari $start ke atas sejumlah $end adalah: " . implode(", ", $nonPrimes);

echo $msg;
