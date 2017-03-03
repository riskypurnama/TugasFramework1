<?php

$dalam = 0;
$hari = 0;
$tinggi = 1;
$tmp = 1;

for ($i=30.5; $i >=0; $i--) {
	if(($hari%5) ==0)
	{
		$dalam = $dalam +2;
	}	

	if(($hari%10) == 0)
	{
		$tmp = $tinggi *0.125;
		$tinggi = $tinggi + $tmp;
	}	

	$dalam = $dalam + $tmp;
	$hari++;
}
echo"Laba-laba akan bisa keluar pada ".$hari." hari";

?>