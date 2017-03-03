<?php
echo "Anak ayam turun 10<br>";
for ($n=10;$n>=1;$n--)
{

if ($n==1)
{
	echo "Anak ayam turun $n,mati satu tinggal induknya";
}
else
{
	$jumlah=$n-1;
	echo "Anak ayam turun $n,mati satu tinggal $jumlah<br>";
}
}
