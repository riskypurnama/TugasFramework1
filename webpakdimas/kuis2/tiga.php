<?php
class siswa{
	public $nis;
	public $nama_siswa;
	protected $kelas;

	final public function daftar_hadir (){
		echo $this->nis;
		echo "Hadir";
	}
}
class siswa_SMP extends siswa{
	private $nama_smp;
	public function daftar_hadir(){
		$now = new Datetime;
		echo $now->format('d-m-Y');
	}
}
?>