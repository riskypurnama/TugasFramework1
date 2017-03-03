<?php
	
$a= 30.5;
for ($b=1; $b<=10; $b++){
	if ($b==5){
		$a=$a+2;
	}	else if ($b==10){
		$a=$a + (0.125*$a)-2;
	}	else{
		$a=$a-1;
	}
	echo "hari ke $b laba-laba merangkak ke tinggi $a meter dari permukaan sumur <br>";
}
echo"";
?>