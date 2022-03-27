<?php
require_once "class_persegipanjang.php";
$persegi1 = new Persegipanjang(15, 13);
$persegi2 = new Persegipanjang(17, 11);

echo "Luas Persegi Panjang I: ".$persegi1 -> Luas()." cm";
echo "<br/>Luas Persegi Panjang II: ".$persegi2 -> Luas()." cm";

echo "<br/>Keliling Persegi Panjang I: ".$persegi1 -> Keliling()." cm";
echo "<br/>Keliling Persegi Panjang II: ".$persegi2 -> Keliling()." cm";
?>