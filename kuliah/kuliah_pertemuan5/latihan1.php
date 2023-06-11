<?php

// ARRAY
// Membuat Array
$hari = array ('Senin', 'Selasa', 'Rabu');
$bulan = ['Mei', 'Juni', 'Juli'];
$myArray = ['Nizarul', 19, false];
$binatang = ['😼', '🐉', '🐥', '🐪', '🦈'];

// Mencetak Array
// gunakan echo hanya bisa mencetak 1 elemen array
echo $hari [0];
echo '<br>';
echo $bulan [2];
echo '<br>';
echo $binatang [3];
echo '<br>';

// untuk mencetak seluruh elemen menggunakan var_dump, print_r
var_dump ($hari);
echo '<br>';
print_r ($bulan);
echo '<br>';
var_dump ($myArray);
echo '<br>';
print_r ($binatang);

echo "<hr>";

// manipulasi Array
// menggunakan index
$hari[3] = 'Kamis';
print_r ($hari);
echo "<hr>";

// menambahkan elemen di akhir dengan mengosongkan indexnya
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r ($hari);
echo "<hr>";

// menambahkan elemen di akhir menggunakan array_push
array_push($bulan, 'Agustus', 'September','Oktober', 'November', 'Desember');
print_r ($bulan);
?>