<?php
// array_keys() =>mengambil semua keys milik array
// array_values() => mengambil semua values milik array
// array_map() => mengubah semua data array dengan callback
// sort() => mengurutkan array
// rsort() => mengurutkan array secara terrbailik
// shuffle() => mengubah posisi data array menjadi random

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(array_map(fn ($data) => $data * 2, $data));
echo "<br>";
// atau dengan cara lain
$mapFunction = fn (int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);

var_dump($dataResult);
