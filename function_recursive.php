<?php
function Factorial($value)
{
     $total = 1;
     for ($i = 1; $i <= $value; $i++) {
          $total *= $i;
     }
     return $total;
}

echo Factorial(2);

function RecursiveFactorial($value)
{
     if ($value == 1) {
          return 1;
     } else {
          $total = $value * RecursiveFactorial($value - 1);
     }
     return $total;
}

echo RecursiveFactorial(5);
