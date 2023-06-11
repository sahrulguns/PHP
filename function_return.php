<?php

function sum(int $first, int $second)
{
     return $first + $second;
}

$total = sum(20, 20);
echo "$total";

echo "<br>";

function getFinalValue(int $value)
{
     if ($value >= 90) {
          return "A";
     } else if ($value >= 70) {
          return "B";
     } else if ($value >= 60) {
          return "C";
     } else {
          return "D";
     }
}

$nilai = getFinalValue(30);

echo "Peringkat $nilai";
