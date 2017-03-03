<?php 
class Model_Buku
{
	public function getdata($koneksi){
		$tmp = array();
		$i = 1;
		$data = $koneksi->query("select * from buku");
		if ($data->num_rows > 0) {
			while ($load = $data->fetch_assoc()) {
				$tmp[$i] = $load;
				$i++;
			}
			return $tmp;
		}
	}
	public function getdataWhere($koneksi,$where){
		$tmp = array();
		$i = 1;
		$data = $koneksi->query("select * from buku where id='$where'");
		if ($data->num_rows > 0) {
			while ($load = $data->fetch_assoc()) {
				$tmp[$i] = $load;
				$i++;
			}
			return $tmp;
		}
	}
	public function insert($koneksi,$judul,$penulis,$tanggal){
		if ($koneksi->query("Insert into buku values('','$judul','$penulis','$tanggal')")) {
			return "Data Berhasi Di Tambah";
		}else{
			return $koneksi->error;
		}
	}
	public function update($koneksi,$id,$judul,$penulis,$tanggal){
		if ($koneksi->query("update buku set judul = '$judul',penulis = '$penulis', tanggal='$tanggal' where id = '$id'")) {
			return "Data Berhasi Di Ubah";
		}else{
			return $koneksi->error;
		}
	}
	public function delete($koneksi,$id){
		if ($koneksi->query("delete from buku where id = '$id'")) {
			return "Data Berhasi Di Hapus";
		}else{
			return $koneksi->error;
		}
	}
}

 ?>