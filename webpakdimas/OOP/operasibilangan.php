<?php
class OperasiBilangan {
	private $bilangan1;
	private $bilangan2;
	function __construct($bil1, $bil2) {
		$this->bilangan1 = $bil1;
		$this->bilangan2 = $bil2;
	}
	function bacaBilangan1() {
		return $this->bilangan1;
	}
	function bacaBilangan2() {
		return $this->bilangan2;
	}
	function jumlahkan() {
		return $this->bilangan1 + $this->bilangan2;
	}
	function kalikan() {
		return $this->bilangan1 * $this->bilangan2;
	}
	function kurang() {
		return $this->bilangan1 - $this->bilangan2;
	}
	function bagi() {
		return $this->bilangan1 / $this->bilangan2;
	}
	function modulus() {
		return $this->bilangan1 % $this->bilangan2;
	}
	function pangkat() {
		$hasil=0;
		for ($i=1;$i<$this->bilangan2;$i++){
			if($hasil==0){
				$hasil=$this->bilangan1*$this->bilangan1;
			}
			else{
				$hasil=$hasil*$this->bilangan1;
			}
		}
		return$hasil;
	}
}
// instansiasi dan setting properties
$operasi1 = new OperasiBilangan(4, 5);

// menampilkan hasil penjumlahan
echo '<p>Hasil penjumlahan '. $operasi1->bacaBilangan1() . ' dan' . $operasi1->bacaBilangan2().' adalah ' . $operasi1->jumlahkan(). '</p>';

// menampilkan hasil perkalian
echo '<p>Hasil perkalian '. $operasi1->bacaBilangan1() . ' dan ' . $operasi1->bacaBilangan2()  . 'adalah ' . $operasi1->kalikan(). '</p>';

// menampilkan hasil pengurangan
echo '<p>Hasil pengurangan'  . $operasi1->bacaBilangan1() . ' dan ' . $operasi1->bacaBilangan2()  . 'adalah '. $operasi1->kurang(). '</p>';

// menampilkan hasil pembagian
echo '<p>Hasil pembagian '. $operasi1->bacaBilangan1() . ' dan ' . $operasi1->bacaBilangan2()  . ' adalah'  . $operasi1->bagi(). '</p>';

// menampilkan hasil pembagian
echo '<p>Hasil modulus '. $operasi1->bacaBilangan1() . ' dan ' . $operasi1->bacaBilangan2()  . ' adalah'  . $operasi1->modulus(). '</p>';

// menampilkan hasil pembagian
echo '<p>Hasil perpangkatan '. $operasi1->bacaBilangan1() . ' dan ' . $operasi1->bacaBilangan2()  . ' adalah'  . $operasi1->pangkat(). '</p>';



?> 
