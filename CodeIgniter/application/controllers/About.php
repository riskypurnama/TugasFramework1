<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => "Rizky Purnamasari",
			'nim' => "1541180125",
			'kelas' => "TI-2c",
			'hobby' => "Jalan-Jalan Belanjan", 
		);
		$this->load->view('about', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
?>