<?php

// Berikut adalah beberapa contoh dari setring function
var_dump(join(",", [1, 2, 3, 4, 5])); // menggabukan string 
var_dump(explode(" ", "Agung Kurniawan")); // memisahkan dengan yg sudah di tentukan
var_dump(strtolower("AGUNG KURNIAWAN")); // mengubah menjadi low case
var_dump(strtoupper("agung kurniawan")); // mengubah menjadi upper case
var_dump(trim("      Agung         Kurniawan      ")); // menghilangkan sepasi bagian depan dan belakang tidak dengna tengah
var_dump(substr("agung Kurniawan", 1, 4)); // menampilkan aray yg ditentukan
