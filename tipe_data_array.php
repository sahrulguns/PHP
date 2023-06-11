<?php

$values = array(18, 9, 8, 7.5);

var_dump($values);

$names = ["sahtul", "eko", "gunawan"];

var_dump($names);
echo "<br>";

// mengambil data rray bedarsarkan index

var_dump($names[0]);
echo "<br>";

// mengubahd ata array pada index tertentu

var_dump($names[0] = "budi");

echo "<br>";

// menghapus array pada index tertentu
unset($names[0]);
var_dump($names);
echo "<br>";


// membuat kode map
// map sama dengan array 
$sahrul = array(
     "id" => "1",
     "name" => "sahrul",
     "age" => 21
);
var_dump($sahrul);
echo "<br>";

// array didalam array

$perul = array(
     "id" => "1",
     "name" => "sahrul",
     "age" => 21,
     "address" => [
          "city" => "pekanbaru"
     ]
);
var_dump($perul);

$name = "Sahrul";

echo "Hello $name, Selamat datang";
