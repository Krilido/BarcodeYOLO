<?php 
Class Report_model extends CI_Model{
	
  function get_report($date){
     // '2015-07-28'
		return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE cast(t1.waktu_masuk as date) = '".$date."';");
	}

  function get_all_paging_sorting_report($date,$jtStartIndex,$jtPageSize,$jtSorting)
  { 
    return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE cast(t1.waktu_masuk as date) = '".$date."' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize.";"); 
  }

  function get_report_sales($nik,$nama){
     // '2015-07-28'
    if($nama == NULL){
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.NIK LIKE '%".$nik."%';");
    }
    if($nik == NULL) {
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.nama_pegawai LIKE '%".$nama."%';");
        
    }
    else{
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.nama_pegawai LIKE '%".$nama."%' AND t3.NIK LIKE '%".$nik."%' ;");    
    }
    
    // return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE cast(t1.waktu_masuk as date) = '".$date."';");
  }
  
  function get_all_paging_sorting_report_sales($nik,$nama,$jtStartIndex,$jtPageSize,$jtSorting)
  { 
    
    if($nama == NULL){
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.NIK LIKE '%".$nik."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize.";");
    }
    if($nik == NULL) {
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.nama_pegawai LIKE '%".$nama."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize.";"); 
    }
    else{
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t3.nama_pegawai LIKE '%".$nama."%' AND t3.NIK LIKE '%".$nik."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize.";");    
    }
  }

  function get_report_kantor($nama_kantor,$kontak_kantor){
     // '2015-07-28'
    if($nama_kantor == NULL){
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.kontak_kantor LIKE '%".$kontak_kantor."%'; ");
    }
    if($kontak_kantor == NULL) {
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.nama_kantor LIKE '%".$nama_kantor."%'; ");    
    }
    else{
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.nama_kantor LIKE '%".$nama_kantor."%' AND t2.kontak_kantor LIKE '%".$kontak_kantor."%'; ");    
    }  
  }
  
  function get_all_paging_sorting_report_kantor($nama_kantor,$kontak_kantor,$jtStartIndex,$jtPageSize,$jtSorting)
  { 
    
    if($nama_kantor == NULL){
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.kontak_kantor LIKE '%".$kontak_kantor."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize." ; ");
    }
    if($kontak_kantor == NULL) {
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.nama_kantor LIKE '%".$nama_kantor."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize." ; "); 
    }
    else{
        return $this->db->query("SELECT DISTINCT t3.NIK, t3.nama_pegawai, t2.nama_kantor, t1.waktu_masuk, t1.jarak FROM test t1 INNER JOIN kantor t2 ON t1.kode_kantor=t2.kode_kantor INNER JOIN pegawai t3 ON t1.imei_masuk=t3.imei WHERE t2.nama_kantor LIKE '%".$nama_kantor."%' AND t2.kontak_kantor LIKE '%".$kontak_kantor."%' ORDER BY ".$jtSorting." LIMIT ".$jtStartIndex.",".$jtPageSize." ; ");    
    }
  }	
  
}
 ?>

