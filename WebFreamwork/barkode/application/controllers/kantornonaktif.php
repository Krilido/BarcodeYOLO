<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kantornonaktif extends CI_Controller
{
	public function index()
	{
		$this->load->view('header_sidebar');
	    $this->load->view('kantor_view_nonaktif');
		$this->load->view('footer');	
	}
	
	public function listkantornonaktif()
	{
		$this->load->model('kantor_model_nonaktif');
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_kantor = $this->kantor_model_nonaktif->get_all_kantor();
		$result = $this->kantor_model_nonaktif->get_all_paging_sorting_kantor($jtStartIndex,$jtPageSize,$jtSorting);

		$rows = $result->result_array(); 
		$recordCount = $all_kantor->num_rows(); 
		$jTableResult = array(); 
		$jTableResult['Result'] = "OK"; 
		$jTableResult['TotalRecordCount'] = $recordCount; 
		$jTableResult['Records'] = $rows; 
		print json_encode($jTableResult);
	}

	public function updatekantornonaktif()
	{
		$this->load->model('kantor_model_nonaktif');
		$id_kantor = $this->input->post('id_kantor');
		$nama_kantor = $this->input->post('nama_kantor');
		$kode_kantor = $this->input->post('kode_kantor');
		$lat_kantor = $this->input->post('lat_kantor');
		$lng_kantor = $this->input->post('lng_kantor');

		$result = $this->kantor_model_nonaktif->post_update_kantor($id_kantor,$nama_kantor,$kode_kantor,$lat_kantor,$lng_kantor);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	public function aktifkankantor()
	{
		$this->load->model('kantor_model_nonaktif');
		$id_kantor = $this->input->post('id_kantor');

		$result = $this->kantor_model_nonaktif->post_aktif_kantor($id_kantor);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
}
?>