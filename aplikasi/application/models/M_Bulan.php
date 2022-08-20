<?php
	/**
	 * 
	 */
	class M_Bulan extends CI_Model
	{
		
		function januari($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'01'),$number,$offset);
		}
 
		function febuari($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'02'),$number,$offset);
		}

		function maret($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'03'),$number,$offset);
		}

		function april($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'04'),$number,$offset);
		}

		function mei($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'05'),$number,$offset);
		}

		function juni($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'06'),$number,$offset);
		}

		function juli($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'07'),$number,$offset);
		}

		function agustus($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'08'),$number,$offset);
		}

		function september($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'09'),$number,$offset);
		}

		function oktober($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'10'),$number,$offset);
		}

		function november($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'11'),$number,$offset);
		}

		function desember($number,$offset)
		{
			$id_pegawai = $this->session->userdata("id");
			return $this->db->get_where('kegiatan',
				array('id_pegawai'=>$id_pegawai, 'month(tanggal)'=>'12'),$number,$offset);
		}

		function jumlah_data()
		{
		return $this->db->get('kegiatan')->num_rows();
		}


	}
?>