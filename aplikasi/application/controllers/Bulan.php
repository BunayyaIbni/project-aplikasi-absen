<?php
	/**
	 * 
	 */
	class Bulan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Bulan');
			$this->load->helper('url', 'form');

			if($this->session->userdata('status') != "pegawai"){
			redirect(base_url("login_pegawai"));
			}
		}

		function cari()
		{
			$pencarian = $this->input->post('bulan');
			redirect(base_url('Bulan/'.$pencarian.'/'));
		}

		function semua()
		{
			redirect(base_url("pegawai"));
		}

		function Januari()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Januari/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->januari($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_januari', $ci);
		}

		function Febuari()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Febuari/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->febuari($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_febuari', $ci);
		}

		function Maret()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Maret/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->maret($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_maret', $ci);
		}

		function April()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/April/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->april($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_april', $ci);
		}

		function Mei()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Mei/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->mei($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_mei', $ci);
		}

		function Juni()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Juni/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->juni($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_juni', $ci);
		}

		function Juli()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Juli/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->juli($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_juli', $ci);
		}

		function Agustus()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Agustus/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->agustus($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_agustus', $ci);
		}

		function September()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/September/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->september($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_september', $ci);
		}

		function Oktober()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Oktober/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->oktober($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_oktober', $ci);
		}

		function November()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/November/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->november($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_november', $ci);
		}

		function Desember()
		{
			$this->load->database();
			$jumlah_data = $this->M_Bulan->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/bulan/Desember/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment('3');
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Bulan->desember($config['per_page'],$from);
			$this->load->view('pegawai/bulan/bulan_desember', $ci);
		}
	}
?>