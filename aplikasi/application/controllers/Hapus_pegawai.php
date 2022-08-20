<?php
	class Hapus_pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Crud');
			$this->load->helper('url', 'form');

			if($this->session->userdata('status') != "pegawai"){
			redirect(base_url("login_pegawai"));
			}
		}

		function hapus_januari($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Januari/');
		}

		function hapus_febuari($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Febuari/');
		}

		function hapus_maret($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Maret/');
		}

		function hapus_april($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/April/');
		}

		function hapus_mei($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Mei/');
		}

		function hapus_juni($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Juni/');
		}

		function hapus_juli($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Juli/');
		}

		function hapus_agustus($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Agustus/');
		}

		function hapus_september($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/September/');
		}

		function hapus_oktober($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Oktober/');
		}

		function hapus_november($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/November/');
		}
		function hapus_desember($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			redirect('Bulan/Desember/');
		}
	}
?>