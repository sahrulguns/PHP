<?php

// menampilkan array dengan fpr each

$person = [
     [
          "firstname" => "sahrul",
          "lastname" => "guanwan",
     ]

];

foreach ($person as  $value) {
     echo "<h2>" . $value["firstname"] . "</h2>";
}

$artikel = [
     [
          "judul" => "Belajar PHP & MySQL untuk Pemula",
          "penulis" => "petanikode"
     ],
     [
          "judul" => "Tutorial PHP dari Nol hingga Mahir",
          "penulis" => "petanikode"
     ],
     [
          "judul" => "Membuat Aplikasi Web dengan PHP",
          "penulis" => "petanikode"
     ]
];

// menampilkan array
foreach ($artikel as $post) {
     echo "<h2>" . $post["judul"] . "</h2>";
     echo "<p>" . $post["penulis"] . "<p>";
     echo "<hr>";
}
