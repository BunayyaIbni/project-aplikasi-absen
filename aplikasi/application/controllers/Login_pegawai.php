<?php 
	defined('BASEPATH') OR exit ('No direct script acccess allowed');

	class Login_pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
			$this->load->helper('url');
			$this->load->model('M_Login');

		}

		function index(){
			$this->load->view('V_Loginpegawai');
		}

		function aksi_login_pegawai(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where	  = array(
			'username' => $username,
			'password' => ($password)
			);
			$cek = $this->M_Login->cek_login("pegawai",$where)->row_array();
				if($cek){
 
			$data_session = array(
				'username' => $username,
				'nama' => $cek['nama_pegawai'],
				'id'   => $cek['id_pegawai'],
				'status' => "pegawai"
				);
 			
			$this->session->set_userdata($data_session);
 
			redirect(base_url("pegawai/"));
 
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger">
                    <h6>Username Atau Password Salah!</h6>
                </div>');
			redirect(base_url("login_pegawai"));
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('login_pegawai'));			
		}

	}
 ?>