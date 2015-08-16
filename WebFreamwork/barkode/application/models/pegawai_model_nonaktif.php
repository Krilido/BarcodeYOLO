<?php
class Pegawai_model_nonaktif extends CI_Model
{
	function get_all_pegawai()
	{ 
		return $this->db->query("SELECT pegawai.NIK, pegawai.nama_pegawai, pegawai.jabatan, pegawai.alamat_pegawai FROM pegawai WHERE pegawai.aktif = 0"); 
	}

	function get_all_paging_sorting_pegawai($jtStartIndex,$jtPageSize,$jtSorting)
	{	
		return $this->db->query("SELECT pegawai.NIK, pegawai.nama_pegawai, pegawai.jabatan, pegawai.alamat_pegawai FROM pegawai WHERE pegawai.aktif = 0 ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . ";"); 
	} 

	function post_update_pegawai($NIK,$nama_pegawai,$jabatan,$alamat_pegawai)
	{
		return $this->db->query("UPDATE pegawai SET pegawai.nama_pegawai = '".$nama_pegawai."', pegawai.jabatan = '". $jabatan."', pegawai.alamat_pegawai = '".$alamat_pegawai."' WHERE pegawai.NIK = '".$NIK."';");
	}

	function post_aktif_pegawai($NIK)
	{
		return $this->db->query("UPDATE pegawai SET pegawai.aktif = 1 WHERE pegawai.NIK = '".$NIK."';");
	}
}
?>