<?php

$num =5;
if($num > 5) {
    var_dump('Bigger then 5');
} elseif ($num === 5) {
    var_dump('Equal to 5');
} else {
    var_dump('Smaller then 5');
}

$day = (int) date('N', strtotime('07.09.2025'));
var_dump($day);

if($day == 1) {
    var_dump('Esmaspäeav');
} else if ($day == 2) {
    var_dump('Teisipäev');
} else if ($day == 3) {
    var_dump('Kolmapäev');
} else if ($day == 4) {
    var_dump('Neljapäev');
} else if ($day == 5) {
    var_dump('Reede');
} else if ($day == 6) {
    var_dump('Laupäev');
} else if ($day == 7) {
    var_dump('Pühapäev');
}

switch($day) {
    case 1:
        var_dump('Esmaspäaev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
        var_dump('Reede');
        break;
    case 6:
        var_dump('Laupäev');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
}