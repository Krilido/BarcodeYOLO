<?php
class Kantor_model extends CI_Model
{
	function get_all_kantor()
	{ 
		return $this->db->query("SELECT kantor.id_kantor, kantor.nama_kantor, kantor.kode_kantor, kantor.lat_kantor, kantor.lng_kantor FROM kantor WHERE kantor.kantor_aktif = 1"); 
	}

	function get_all_paging_sorting_kantor($jtStartIndex,$jtPageSize,$jtSorting)
	{	
		return $this->db->query("SELECT kantor.id_kantor, kantor.nama_kantor, kantor.kode_kantor, kantor.lat_kantor, kantor.lng_kantor FROM kantor WHERE kantor.kantor_aktif = 1 ORDER BY " . $jtSorting . " LIMIT " . $jtStartIndex . "," . $jtPageSize . ";"); 
	} 

	function post_update_kantor($id_kantor,$nama_kantor,$kode_kantor,$lat_kantor,$lng_kantor)
	{
		return $this->db->query("UPDATE kantor SET kantor.nama_kantor = '".$nama_kantor."', kantor.kode_kantor = '".$kode_kantor."', kantor.lat_kantor = '".$lat_kantor."', kantor.lng_kantor = '".$lng_kantor."' WHERE kantor.id_kantor = '".$id_kantor."';");
	}

	function post_nonaktif_kantor($id_kantor)
	{
		return $this->db->query("UPDATE kantor SET kantor.kantor_aktif = 0 WHERE kantor.id_kantor = '".$id_kantor."';");
	}
	
	function post_create_kantor($id_kantor,$nama_kantor,$kode_kantor,$lat_kantor,$lng_kantor)
	{
		return $this->db->query("INSERT INTO kantor(nama_kantor, kode_kantor, lat_kantor, lng_kantor) VALUES('".$nama_kantor."', '".$kode_kantor."','".$lat_kantor."','".$lng_kantor."');");
	}

	function get_create_kantor()
	{
		return $this->db->query("SELECT kantor.nama_kantor, kantor.kode_kantor, kantor.lat_kantor, kantor.lng_kantor FROM kantor WHERE kantor.id_kantor = LAST_INSERT_ID();");
	}
}
?>