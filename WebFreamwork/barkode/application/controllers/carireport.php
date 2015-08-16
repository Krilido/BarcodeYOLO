<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carireport extends CI_Controller
{
	

	public function index(){

		$this->load->view('header_sidebar');
        $this->load->view('cari_view');
		$this->load->view('footer');
		
		

	}

	public function sales(){
		$this->load->library('table');
		$this->load->model('report_model');
		
		$nik = /*"1111";*/$this->input->post('nik');
		$nama = /*"1111";*/$this->input->post('nama_pegawai');
		
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_report = $this->report_model->get_report_sales($nik,$nama);
		
		$result = $this->report_model->get_all_paging_sorting_report_sales($nik,$nama,$jtStartIndex,$jtPageSize,$jtSorting);

		// print_r($all_report);
		$rows = $result->result_array(); 
		$recordCount = $all_report->num_rows(); 
		
		$jTableResult = array(); 
		$jTableResult['Result'] = "OK"; 
		$jTableResult['TotalRecordCount'] = $recordCount; 
		$jTableResult['Records'] = $rows; 
		
		print json_encode($jTableResult);
	}


}

?>