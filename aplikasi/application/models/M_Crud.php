<?php 
	
	class M_Crud extends CI_Model
	{

		function tampil_data($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			//$this->db->like('id_pegawai',$id_pegawai, 'both');
			
			/*$this->db->select('*');
			
			$this->db->where('id_pegawai', $id_pegawai);*/

			//return $this->db->get('kegiatan',$number,$offset);		
			$this->db->order_by('tanggal','DESC');
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai),$number,$offset);
		}
 
		function jumlah_data()
		{
		return $this->db->get('kegiatan')->num_rows();
		}

		public function cari($pencarian,$number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
		/*	$this->db->select('*');
			$this->db->from('kegiatan');
			$this->db->like('nama_kegiatan',$pencarian);
		*/
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>$pencarian),$number,$offset);
			//$this->db->or_like('harga',$keyword);

			/*bisa jadi referensi juga buat nyari tanggal waktu nanti laporan
			
			return $this->db->query("select * from kegiatan where day(tanggal) = 26 and year(tanggal) = 2019 ");*/

			//return $this->db->get();
		}

	/*	function tampil_data($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->query("select * from kegiatan where id_pegawai like '%$id_pegawai%' ",$number,$offset);
		}
	*/
		function tampil_pegawai()
		{
			return $this->db->query("select pegawai.*, level.bidang from pegawai left join level on pegawai.id_level = level.id_level");	
		}

		function tampil_nama($id_pegawai)
		{
			return $this->db->query("select * from pegawai where id_pegawai like '%$id_pegawai%'");	
		}
		function tampilin_bidang_buat_edit($id_pegawai)
		{
			return $this->db->query("select pegawai.*, level.bidang from pegawai left join level on pegawai.id_level = level.id_level where id_pegawai like '%$id_pegawai%'");
		}
		function tampil_bidang()
		{
			return $this->db->get('level');
		}

		function input_data($data,$table)
		{
			$this->db->insert($table,$data);
		}

		function edit_data($where,$table)
		{		
			return $this->db->get_where($table,$where);
		}

		function update($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}	

		function hapus($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}

		public function cari_laporan_bulanan($bulan,$tahun)
		{
			$id_pegawai = $this->session->userdata("id");
			$nama_pegawai = $this->session->userdata("nama");
			return $this->db->query("select kegiatan.*, pegawai.nama_pegawai from kegiatan, pegawai where (month(tanggal) = $bulan and year(tanggal) = $tahun) and (kegiatan.id_pegawai like '%$id_pegawai%' and pegawai.nama_pegawai like '%$nama_pegawai%')");
			
		}

		public function cari_laporan_pegawai($bulan, $id_pegawai)
		{
			//return $this->db->query("select kegiatan.*, pegawai.nama_pegawai from kegiatan, pegawai where month(tanggal) = $bulan and (kegiatan.id_pegawai like '%$id_pegawai%')");

			//return $this->db->query("select kegiatan.*, pegawai.nama_pegawai from kegiatan, pegawai where month(tanggal) = $bulan and kegiatan.id_pegawai like '%$id_pegawai%'");

			return $this->db->query("select kegiatan.*, pegawai.nama_pegawai from kegiatan left join pegawai on kegiatan.id_pegawai = pegawai.id_pegawai where month(tanggal) = $bulan and kegiatan.id_pegawai like '%$id_pegawai%'");
		}
	}
 ?>

