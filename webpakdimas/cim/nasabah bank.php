<?php
	$uang = 1000000;
	$bunga = 0;
	$bulan=1;
	while($bulan<=12)
	{
		if($uang<=1100000)
		{
			$bunga=($uang*0.03);
			$uang=$uang+$bunga;
		}else{
			$bunga=($uang*0.04);
			$uang=$uang+$bunga;
		}
		$uang=$uang-9000;
		$bulan++;
	}	
	echo "saldo terakhir umak adalah $uang";
	?>
	