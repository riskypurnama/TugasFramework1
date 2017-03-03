<?php
$tabungan = 5000000;
$bunga = 10/100;
$n=1;
while($n<=8)
{
	$j=$bunga*$tabungan;
	echo "tabungannya pada tahun $n adalah $tabungan bunga $j <br>";
	$tabungan=$tabungan+($bunga*$tabungan);
	$n++;
}