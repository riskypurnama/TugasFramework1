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
		else{
			$status = 'Murah';
		}
		return $status;
	}

	function hargaSecond(){
		if($this->tahun>2005){
			$hargaB = (0.2 * $this->harga);
		}
		else if($this->tahun>=2000 && $this->tahun<=2005){
			$hargaB = (0.3 * $this->harga);
		}
		else if($this->tahun<2000){
			$hargaB = (0.4 * $this->harga);
		}
		return $hargaB;
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
	echo '<p>' . $mobil->hargaSecond() . '</p>';

?>
