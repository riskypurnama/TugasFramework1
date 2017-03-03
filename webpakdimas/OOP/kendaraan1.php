<?php
Class Kendaraan {
	var $jumlahRoda;
	var $warna;
	var $bahanBakar;
	var $harga;
	var $merek;
	var $tahun;

	function statusHarga() {
		if ($this->harga > 50000000){
			$status = 'Mahal';
		}
		else
		{
			$status = 'Murah';
		}
		return $status;
	}

	function dapatSubsidi(){
		if($this->bahanBakar == 'Premium' && $this->tahun<2005){
			return true;
		}
		else{
			return false;
		}
	}
}

	$mobil = new Kendaraan();
	$mobil->jumlahRoda=4;
	$mobil->warna="Putih";
	$mobil->bahanBakar="Premium";
	$mobil->harga=500000000;
	$mobil->merek="Kijang";
	$mobil->tahun=2003;
	echo '<p>' . $mobil->statusHarga() . '</p>';
	echo $mobil->dapatSubsidi();

?>