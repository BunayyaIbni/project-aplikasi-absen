<?php
	
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Crud');
			$this->load->helper('url','form');

			if($this->session->userdata('status') != "admin"){
			redirect(base_url("login_admin"));
			}
		}
		

		function index()
		{
			$this->load->view('admin/V_Tampiladmin');
		}

		function daftar_pegawai()
		{
			$ci['data']=$this->M_Crud->tampil_pegawai();
			$this->load->view('admin/Daftar_Pegawai', $ci);
		}

		function tambah()
		{
			$ci['data']=$this->M_Crud->tampil_bidang();
			$this->load->view('admin/Tambah_Pegawai',$ci);
		}

		function aksi_tambah_pegawai()
		{
			$nama_pegawai	= $this->input->post('nama_pegawai');
			$bidang 		= $this->input->post('bidang');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			$foto			= $_FILES['foto']['name'];
				
			if ($foto = '') {
				echo "<script>alert('mwehehehe') </script>";
				}else{
				$config['upload_path']			='./foto_profil/';
				$config['allowed_types']		='jpg|png|jepg|gif';

				$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				 $error = array('error' => $this->upload->display_errors());
				 var_dump($error);
			}else{
				$foto=$this->upload->data('file_name');
			}
			} 
 
			$data = array(
			'nama_pegawai' => $nama_pegawai,
			'id_level' 		=> $bidang,
			'username'	 	=> $username,
			'password'		=> $password,
			'foto'			=> $foto
			);
			$this->M_Crud->input_data($data,'pegawai');
			redirect('admin/daftar_pegawai');
		}

		function edit($id_pegawai)
		{
			//$where = array('id_pegawai' => $id_pegawai);
			$level['level'] = $this->M_Crud->tampilin_bidang_buat_edit($id_pegawai)->result();
			$ci['data']=$this->M_Crud->tampil_bidang()->result();
			//$data['data'] = $this->M_Crud->edit_data($where,'pegawai')->result();
			$this->load->view('admin/Edit_Pegawai',$level,$ci);
		}

		function update()
		{
			$id_pegawai	= $this->input->post('id_pegawai');
			$nama_pegawai	= $this->input->post('nama_pegawai');
			$bidang 		= $this->input->post('bidang');
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('password');
			

			$data = array(
			'nama_pegawai'  => $nama_pegawai,
			'id_level' 		=> $bidang,
			'username'	 	=> $username,
			'password'		=> $password
			);

			$where = array(
				'id_pegawai' => $id_pegawai
			);
			$this->M_Crud->update($where,$data, 'pegawai');
			$this->session->set_flashdata('message', '<script>alert("data updated");</script>');
			redirect('admin/daftar_pegawai');
		}

		function hapus($id_pegawai)
		{
			$where = array('id_pegawai' => $id_pegawai);
			$this->M_Crud->hapus($where,'pegawai');
			$this->session->set_flashdata('message', '<script>alert("data deleted");</script>');
			redirect('admin/daftar_pegawai');
		}

		function laporan_pegawai()
		{
			$ci['data']=$this->M_Crud->tampil_pegawai();
			$this->load->view('admin/Laporan_Pegawai',$ci);
		}

		function hasil_laporan()
		{
			$id_pegawai = $this->input->post('id_pegawai');
			$bulan		= $this->input->post('bulan');
			$data['ci'] = $this->M_Crud->cari_laporan_pegawai($bulan, $id_pegawai);

			$this->load->view('admin/Hasil_Laporan_Pegawai',$data);
		}
		
	}
?>