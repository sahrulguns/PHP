<?php
// membuat waktu sekarang

// date_default_timezone_get('Asia Jakarta');

echo " Waktu sekarang adalah " . date("h:i:sa");

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";


date_default_timezone_set("Asia/Jakarta");
echo "The time is " . date("h:i:sa") . "<br> <br>";

$d = strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo "<br><br>";

// mengambil tanggal sekarang 

$tanggal_sekarang = new DateTime("now");
$tanggal_lalu = new DateTime("yesterday");
echo "Tanggal sekarang : " . $tanggal_sekarang->format('Y:M:D');
echo "<br>";
echo $tanggal_lalu->diff($tanggal_sekarang)->format("%a hari %h jam %i menit %s detik");
