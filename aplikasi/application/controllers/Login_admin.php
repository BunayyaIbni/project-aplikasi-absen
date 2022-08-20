<?php
defined('BASEPATH') OR exit ('No direct script acccess allowed');

class login_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('M_Login');
	}

	function index()
	{
		$this->load->view('V_Loginadmin');
	}


	function aksi_login_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where	  = array(
		'username' => $username,
		'password' => ($password)
		);
		$cek = $this->M_Login->cek_login("admin",$where)->row_array();
			if($cek){
 			$data_session = array(
			'nama' => $username,
			'status' => "admin"
			);
 		
		$this->session->set_userdata($data_session);

		redirect(base_url("Admin"));
 
		}else{
			$this->session->set_flashdata('message', '<script>alert("Maaf username/password salah");</script>');
			redirect("login_admin");
		}
	}

	function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('login_admin'));
		}
}
?>