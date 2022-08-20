<?php 
	
	class Pegawai extends CI_Controller
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

		public function index()
		{
			redirect(base_url("pegawai/awal/"));
		}

		public function awal(){
		$this->load->database();
		$jumlah_data = $this->M_Crud->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/pegawai/awal/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 7;
		$from = $this->uri->segment('3');
		$this->pagination->initialize($config);		
		$ci['data'] = $this->M_Crud->tampil_data($config['per_page'],$from);
		$this->load->view('pegawai/V_Tampilpegawai', $ci);
	}

	/*	function index()
		{
			$ci['data']=$this->M_Crud->tampil_data();
			$this->load->view('V_Tampilpegawai', $ci);
		}
	*/
		function input()
		{
			$this->load->view('pegawai/V_Inputdata');
		}

		function aksiinput()
		{
			$id_pegawai		= $this->input->post('id_pegawai');
			$nama_kegiatan	= $this->input->post('nama_kegiatan');
			$uraian 		= $this->input->post('uraian');
			$tanggal 		= $this->input->post('tanggal');
			//$tanggal = date($this->input->post('tanggal')'H:i:s');
			$foto			= $_FILES['foto']['name'];
				
			if ($foto = '') {
				echo "<script>alert('mwehehehe') </script>";
				}else{
				$config['upload_path']			='./gambar/';
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
			'id_pegawai'	=> $id_pegawai,
			'nama_kegiatan' => $nama_kegiatan,
			'uraian' 		=> $uraian,
			'screenshoot' 	=> $foto,
			'tanggal'		=> $tanggal
			);
			$this->M_Crud->input_data($data,'kegiatan');
			$this->session->set_flashdata('message', '<script>alert("Data Berhasil Dimasukan!");</script>');
			redirect(base_url('pegawai/awal/'));
			
		}

		function edit($id)
		{
			$where = array('id' => $id);
			$data['data'] = $this->M_Crud->edit_data($where,'kegiatan')->result();
			$this->load->view('pegawai/V_Editdata',$data);
		}

		function update()
		{
			$id 			= $this->input->post('id');
			$nama_kegiatan	= $this->input->post('nama_kegiatan');
			$uraian 		= $this->input->post('uraian');
			$tanggal 		= $this->input->post('tanggal');
 
			$data = array(
			'nama_kegiatan' => $nama_kegiatan,
			'uraian' 		=> $uraian,
			'tanggal'		=> $tanggal
			);

			$where = array(
				'id' => $id
			);
			$this->M_Crud->update($where,$data, 'kegiatan');
			$this->session->set_flashdata('message', '<script>alert("data updated");</script>');
			redirect('pegawai');
		}

		function hapus($id)
		{
			$where = array('id' => $id);
			$this->M_Crud->hapus($where,'kegiatan');
			$this->session->set_flashdata('message', '<script>alert("data deleted");</script>');
			redirect('pegawai');
		}

		public function cari()
		{
			$pencarian = $this->input->post('bulan');
			$this->load->database();
			$jumlah_data = $this->M_Crud->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'/pegawai/cari/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 7;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$ci['data'] = $this->M_Crud->tampil_data($config['per_page'],$from);
			


			$ci['data']=$this->M_Crud->cari($pencarian,$config['per_page'],$from);
			$this->load->view('pegawai/Search',$ci);
		}
	

		function laporan_bulanan()
		{
			$this->load->view('pegawai/V_Laporan_Bulanan');
		}

/*		function pencarian_laporan_bulanan()
		{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$ci['data']=$this->M_Crud->cari_laporan_bulanan($bulan, $tahun);
			$this->load->view('V_Hasil_Laporan_Bulanan',$ci);
		} */

		function nyari_laporan()
		{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$data['ci'] = $this->M_Crud->cari_laporan_bulanan($bulan, $tahun);
			$nama = $this->M_Crud->tampil_pegawai();

			$this->load->view('pegawai/V_Hasil_Laporan_Bulanan', $data);
		}
	}
 ?>