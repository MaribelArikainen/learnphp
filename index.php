<?php

$array = array(1, 2, 3);
var_dump($array);
$array = [1, 2, 3];
var_dump($array);
$array = [
    1,
    'Maribel',
    true,
    [1, 2, 3],
    3.4,
];
var_dump($array);
$array = [
    'name' => 'Maribel',
    'age' => 19,
    'isFemale' => true,
];
var_dump($array);

$array = [
    100 => 1,
    2,
    'name' => 'Maribel',
    'age' => 19,
    6,
    'isFemale' => true,
    3,
    4,
    5,
];
var_dump($array);

$array = [1, 2, 3];
var_dump($array[1]);

$array = [
    'name' => 'Maribel',
    'age' => 19,
    'isFemale' => true,
];
var_dump($array['name']);

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 5,6,7);
$array[] = 8;
var_dump($array);
$array = 'something else';
var_dump($array);