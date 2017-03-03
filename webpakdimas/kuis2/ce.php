<?php
class siswa_smp
{
	public $nis;
	public $nama_siswa;
	public $nama_smp;
	protected $kelas;

}

class siswasmp extends siswa_smp
{
	public function tampilkan_kelas()
	{
		$this->kelas="9";
		return $this->kelas;
	}
}

$Budi = new siswasmp();
$Budi->nama_siswa="Budi";
$Budi->nis="12";
$Budi->nama_smp="SMP Negeri 13 Malang";
echo $Budi->nis."<br/>";
echo $Budi->nama_siswa."<br/>";
echo $Budi->tampilkan_kelas()."<br/>";
echo $Budi->nama_smp."<br/>";
?>