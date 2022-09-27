<?php

declare(strict_types=1);

// Type declaration en strict typing mode, opdracht 2a

function helloWorld(): void
{
    echo "Hello world";
}

helloWorld();

// Resultaat na uitvoer:
// Hello world

echo "<br><br>";

// Type declaration en strict typing mode, opdracht 2b

function saySomething1(string $what): void
{
    echo $what;
}

saySomething1("Hello world");

// Resultaat na uitvoer:
// Hello world

echo "<br><br>";

// Type declaration en strict typing mode, opdracht 2c

function saySomething2(string $what): string
{
    return strtoupper($what);
}

echo saySomething2("hello world");

// Resultaat na uitvoer:
// HELLO WORLD

echo "<br><br>";

// Type declaration en strict typing mode, opdracht 2d

function filter(array $arr, int $element): array
{
    $arrNew = []; // Loop door de elementen in $arr // Als element NIET gelijk aan $element, dan verwijder van $arr ...
    foreach ($arr as $entry) {
        if ($element !== $entry) {
            array_push($arrNew, $entry);
        }
    }
    return $arrNew;
}
var_dump(filter([5, 3, 2, 8, 9], 2));

// Resultaat na uitvoer:
// array(4) { [0]=> int(5) [1]=> int(3) [2]=> int(8) [3]=> int(9) }

echo "<br><br>";

// Type declaration en strict typing mode, opdracht 2e

function filter2(array $arr, string $search, string $replace): array
{
    $arrNew = [];
    foreach ($arr as $entry) {
        array_push($arrNew, str_replace($search, $replace, $entry));
    }
    return $arrNew;
}
var_dump(filter2(["spa rood", "cola", "spa blauw", "cola"], "cola", "water"));

// Resultaat na uitvoer:
//array(4) { [0]=> string(8) "spa rood" [1]=> string(5) "water" [2]=> string(9) "spa blauw" [3]=> string(5) "water" }

echo "<br><br>";

// Type declaration en strict typing mode, opdracht 2f

function sum(array $arr)
{
    $sum = 0;
    foreach ($arr as $entry) {
        if (is_int($entry)) {
            $sum += $entry;
        }
    }
    return $sum;
}

$arr = [24, 12, 1, 5];
echo sum($arr);

// Resultaat na uitvoer:
// 42