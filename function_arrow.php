<?php
$firstname = "Sahrul";
$lastname = "gunawan";

// menggunakan aninymous  function
$anonymousFuntion = function () use ($firstname, $lastname): string {
     return "Hello $firstname $lastname";
};

// menggunakan arrow function kita dapat mengambil variable global secara langsung sedangkan pada anonymous funvtion tidak.
// harus menggunakan use
//meggunakan arrow function
$arrowFunction = fn () => "Hello $firstname $lastname";

echo $anonymousFuntion();
echo $arrowFunction();
