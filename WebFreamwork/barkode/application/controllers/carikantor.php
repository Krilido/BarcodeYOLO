<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carikantor extends CI_Controller
{
	

	public function index(){

		$this->load->view('header_sidebar');
        $this->load->view('carikantor_view');
		$this->load->view('footer');
		
		

	}

	public function kantor(){
		$this->load->library('table');
		$this->load->model('report_model');
		
		$nama_kantor = $this->input->post('nama_kantor');
		$kontak_kantor = $this->input->post('kontak_kantor');
		
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_report = $this->report_model->get_report_kantor($nama_kantor,$kontak_kantor);
		
		$result = $this->report_model->get_all_paging_sorting_report_kantor($nama_kantor,$kontak_kantor,$jtStartIndex,$jtPageSize,$jtSorting);

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