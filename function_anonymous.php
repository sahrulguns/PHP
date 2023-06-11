<?php

// adalah function tanpa nama , di php  disebut juga dengan closure
// biasanay digunakan sebagai value atau argument variable
// 

$sayHello = function (string $name) {
     echo " Hello $name";
};

$sayHello("Sahrul <br>");

// sebagai argumen

function sayGoodBye(string $name, $filter)
{
     $firstname = $filter($name);
     echo "Good bye $firstname";
}

// disini anonymous funvtion dapat dimasukan kedalam funtion sebagai berikut
sayGoodbye("sahrul", function (string $name): string {
     return strtoupper($name);
});

echo "<br>";
// secara default,anonyous funtion tidakn bisa mengakses variable yang terdapat diluar funtion
// jika kita ingin menggunakan variable yang terdapat diluar anonymous funvtion,kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti dengan variable yang ingin kita gunakan

$firstname = "sahrul";
$lastname = "gunawan";

$sayHelloSahrul =  function () use ($firstname, $lastname) {
     echo "Hello $firstname $lastname";
};

$sayHelloSahrul();
