<?php
class Mahasiswa extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url;
			redirect($url);
		}
	}

	function index(){
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/index.php');
		$this->load->view('Mahasiswa/Template/footer.php');
	}

	//-----------Data Jadwal------------

	function data_jadwal(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_mahasiswa($where);
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/data_jadwal.php',$data);
		$this->load->view('Mahasiswa/Template/footer.php');
	}

	//-------------- Data Absensi ---------------

	function data_absensi(){
		$where = $this->session->userdata('id');
		$this->load->model('M_Jadwal');
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_mahasiswa($where);
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/data_absensi.php',$data);
		$this->load->view('Mahasiswa/Template/footer.php');
	}

	function data_absensi_view($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$where1 = $this->session->userdata('id');
		$this->load->model('M_Absensi');
		$data['tbl_absensi'] = $this->M_Absensi->Absensi_mahasiswa_view($id_jadwal,$where1);
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/data_absensi_view.php',$data);
		$this->load->view('Mahasiswa/Template/footer.php');
	}

	//--------------Data Nilai ---------------

	function data_nilai(){
		$where = $this->session->userdata('id'); 
		$this->load->model('M_Jadwal'); 
		$data['tbl_jadwal'] = $this->M_Jadwal->jadwal_mahasiswa($where);
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/data_nilai.php',$data);
		$this->load->view('Mahasiswa/Template/footer.php');
	}

	function data_nilai_view($id_jadwal){
		$where = array('id_jadwal' => $id_jadwal);
		$where1 = $this->session->userdata('id');
		$this->load->model('M_Nilai');
		$data['tbl_nilai'] = $this->M_Nilai->Nilai_mahasiswa_view($id_jadwal,$where1);
		$this->load->view('Mahasiswa/Template/header.php');
		$this->load->view('Mahasiswa/Template/menu.php');
		$this->load->view('Mahasiswa/data_nilai_view.php',$data);
		$this->load->view('Mahasiswa/Template/footer.php');
	}


	
}