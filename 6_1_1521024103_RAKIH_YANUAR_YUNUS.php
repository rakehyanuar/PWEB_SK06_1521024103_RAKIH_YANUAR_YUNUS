<?php
echo "Diameter 103<br><br>";
echo "Luas Lingkaran<br>";
function luas_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$r = 1/2 * $d;
	$hasil = $phi * $r * $r;
	return $hasil;
}
echo luas_lingkaran(). " cm2<br>";

echo "<br>Keliling Lingkaran<br>";
function kel_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$hasil = $phi * $d;
	return $hasil;
}
echo kel_lingkaran(). " cm<br>";

echo "<br>Volume Lingkaran<br>";
function vol_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$r = 1/2 * $d;
	$rp = $r * $r * $r;
	$hasil = 4/3 * $phi * $rp;
	return $hasil;
}

echo vol_lingkaran(). " cm3";
?>