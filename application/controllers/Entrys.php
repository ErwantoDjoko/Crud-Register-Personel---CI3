<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Entrys extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Personel_Model', 'Personmodel');
		$this->load->model('Prefix_Model', 'PrefixModel');
		$this->load->helper(array('form', 'url'));

		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$data = array();
		$data['rkelas'] = $this->PrefixModel->getKelas();
		$data['ralat'] = $this->PrefixModel->getAlat();
		$data['rklasifikasi'] = $this->PrefixModel->getKlasifikasi();
		$data['rpersonel'] = $this->PrefixModel->getPersoneltype();

		$this->load->view('headers');
		$this->load->view('entry', $data);
	}
	public function view()
	{
		$data = array();
		$data['persons'] = $this->Personmodel->getPerson($_GET['param']);

		$this->load->view('headers');
		$this->load->view('view',$data);
	}

	function getRandom($n) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
	 
		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
		return $randomString;
	}
	 

	public function upRegis()
	{
		$result = false;
		$acak = $this->getRandom(10);
		header('Content-Type: application/json');
		$fnames = explode(".", $_FILES['image']['name']);
		$extensi_file = end($fnames);

		$config['file_name'] = $acak;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 1024;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
			redirect('/regis-personel?info='.$error['error'].'');
		} else {
			$data = $this->upload->data();

			$data_info = array(
				'acak' => $acak,
				'nama_personel' => $_POST['nama_t'],
				'tempat' =>  $_POST['tempat_t'],
				'dob' =>  $_POST['dob_t'],
				'jenis_personel' => $_POST['sel_jenis'],
				'jenis_alat' =>$_POST['sel_alat'],
				'klasifikasi' => $_POST['sel_klasifikasi'],
				'kelas' => $_POST['sel_kelas'],
				'noreg' => $_POST['noreg_t'],
				'batas_waktu' => $_POST['exp_t'],
				'path_profile' => 'uploads/' . $acak.'.'.$extensi_file,
			);

			$result = $this->Personmodel->saverecords($data_info);
			if ($result) {
				redirect('/view-personel?param='.$acak.'', 'refresh');
			}
			else{
				redirect('/regis-personel?info=failed inserted, check database connection');
			}

		}

	}
}