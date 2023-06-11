<?php

function foo()
{
     echo " Foo";
}

function bar()
{
     echo "bar";
}

$functionYangAkandiPanggil = "foo";
echo " $functionYangAkandiPanggil";

echo "<br>";
// kode penggunaan variable funvtion
function SayHello(string $name, $filter)
{
     $finalName = $filter($name);
     echo "Hello $finalName";
}

function sampleFunction(string $name): string
{
     return "Sample $name";
}

// dan jika ingin memsaukan funvtion bawaab php maka bisa langsung diberkan pada parameter
sayHello("Eko", "strtoupper");
