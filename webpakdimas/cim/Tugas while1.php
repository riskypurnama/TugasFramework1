<?php
$tabungan = 1000000;
$bunga = 12/100;
$n =1;
while($n<=12)
{
	$tabungan=$tabungan+($bunga*$tabungan);
	echo "Tahun $n adalah $tabungan <br>";
	$n++;
}
