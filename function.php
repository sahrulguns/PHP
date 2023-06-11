<?php

// default argument value
// pada php terdapat firtu dimana didalam parameter dapat di setting secara bawaaan

function sayHello($name = "sahrul")
{
     echo "hello $name";
}

sayHello();


// typw declaration
function sum(int $first, int $second)
{
     $total = $first + $second;
     echo "$total";
}

sum(70, 60);
sum("60", 60);

echo "<br>";

// variable function argument list
// membuat data yang dikirimkan menjadi lebih praktis.

function sumAll(...$values)
{
     $total = 0;
     foreach ($values as $value) {
          $total += $value;
     }
     echo "Total " . implode(',', $values) . " = $total";
}

sumAll(1, 3, 7, 6);
