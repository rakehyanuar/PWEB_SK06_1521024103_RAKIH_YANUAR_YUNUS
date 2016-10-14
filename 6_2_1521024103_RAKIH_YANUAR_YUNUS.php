<?php
echo "NIM 1521024103<br>
103 = Bilangan 1<br>
024 = Bilangan 2<br>
21 = Bilangan 3<br>
15 = Bilangan 4<br>";
echo "Diameter Lingkaran = 103cm<br>
Panjang Sisi Persegi = 24cm<br>
Panjang Persegi Panjang = 21cm<br>
Lebar Persegi Panjang = 15cm<br>
Tinggi Persegi Panjang = 24cm<br><br>
";
echo "*Luas Lingkaran<br>";
function luas_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$r = 1/2 * $d;
	$hasil = $phi * $r * $r;
	return $hasil;
}
echo luas_lingkaran(). " cm2<br>";

echo "<br>*Keliling Lingkaran<br>";
function kel_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$hasil = $phi * $d;
	return $hasil;
}
echo kel_lingkaran(). " cm<br>";

echo "<br>*Volume Lingkaran<br>";
function vol_lingkaran(){
	$phi = 22/7;
	$d = 103;
	$r = 1/2 * $d;
	$rp = $r * $r * $r;
	$hasil = 4/3 * $phi * $rp;
	return $hasil;
}

echo vol_lingkaran(). " cm3<br><br>";
echo "**Luas Persegi<br>";

function persegi(){
	$s = 24;
	$l_persegi = $s * $s;
	$hasil = $l_persegi;
	return $hasil; 
}
echo persegi(). " cm2<br><br>";
echo "**Keliling Persegi<br>";

function k_persegi(){
	$s = 24;
	$k_persegi = 4 * $s;
	$hasil = $k_persegi;
	return $hasil; 
}
echo k_persegi(). " cm<br><br>";

echo "**Volume Persegi<br>";

function v_persegi(){
	$s = 24;
	$v_persegi = $s * $s * $s;
	$hasil = $v_persegi;
	return $hasil; 
}
echo v_persegi(). " cm3<br><br>";

echo "***Luas Persegi Panjang<br>";

function l_persegi_p(){
	$p = 21;
	$l = 15;
	$luas_persegi = $p * $l;
	$hasil = $luas_persegi;
	return $hasil; 
}
echo l_persegi_p(). " cm2<br><br>";

echo "***Keliling Persegi Panjang<br>";

function k_persegi_p(){
	$p = 21;
	$l = 15;
	$kel_persegi = 2* ($p + $l);
	$hasil = $kel_persegi;
	return $hasil; 
}
echo k_persegi_p(). " cm<br><br>";

echo "***Volume Persegi Panjang<br>";

function v_persegi_p(){
	$p = 21;
	$l = 15;
	$t = 24;
	$vol_persegi = $t * $p * $l;
	$hasil = $vol_persegi;
	return $hasil; 
}
echo v_persegi_p(). " cm3<br><br>";
?>