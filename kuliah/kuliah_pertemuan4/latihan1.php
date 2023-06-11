<?php

$angka = 10;

function cek_ganjil_genap ($angka) //parameter
{    
    if ($angka % 2 == 1) {
    
        return "$angka adalah bilangan GANJIL";
    
    } else {
        
        return "$angka adalah bilangan GENAP"; 
    
    }
}

echo cek_ganjil_genap ($angka); //ini hanya argument bagi function

echo '<br>';

echo cek_ganjil_genap (5);

echo '<br>';

echo cek_ganjil_genap (982);

echo '<br>';

echo cek_ganjil_genap (1999);
?>