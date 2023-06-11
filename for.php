<?php
// mengakses data array dengan perulangan

$names = ["sahrul", "gunawan", "cahy0", "santoso"];

for ($counter = 0; $counter < count($names); $counter++) {
     echo "<p>heloo new member $names[$counter]</p>";
}
