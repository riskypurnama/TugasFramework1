<?php
class laptop {
	private $merk = "toshiba";
	private $pemilik = "vigit";

	public function _construct(){
		echo "konstruktor fam_resume_monitor(fam, fam_monitor)";
	}

	public function pemakai_laptop(){
		return "pemakai laptop $this->merk pemilik $this->pemilik";
	}

	public function _destruct(){
		echo"destruktor laptop";
	}
}

$laptop_toshiba = new laptop();

echo "<br/>";
echo $laptop_toshiba->pemakai_laptop();
echo "<br/>";
?>