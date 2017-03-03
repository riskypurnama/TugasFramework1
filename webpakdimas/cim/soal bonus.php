<?php
	
$a=30.5;
for ($b=1; $b<=30; $b++){
	if ($b==5){
		$a=$a+2;
	}	else if ($b==10){
		$a=$a + (0.125*$a)-2;
	}	else{
		$a=$a-1;
	}
	echo "hari ke $b laba2 dapat merangkak $a meter dari dalam sumur<br>";
}
?>