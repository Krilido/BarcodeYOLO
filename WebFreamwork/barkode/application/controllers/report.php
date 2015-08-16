<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Report extends CI_Controller
{
	

	public function index(){

			// $this->load->view('Attendance_view',$data['jTableResult']);
			$this->load->view('header_sidebar');
	        $this->load->view('report_view');
			$this->load->view('footer');
		
		

	}

	public function report_hari(){
		$this->load->helper('date');
		$date = date('Y-m-d');
		$this->load->model('report_model');
		
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_report = $this->report_model->get_report($date);
		$result = $this->report_model->get_all_paging_sorting_report($date,$jtStartIndex,$jtPageSize,$jtSorting);

		$rows = $result->result_array(); 
		$recordCount = $all_report->num_rows(); 
		
		$jTableResult = array(); 
		$jTableResult['Result'] = "OK"; 
		$jTableResult['TotalRecordCount'] = $recordCount; 
		$jTableResult['Records'] = $rows; 
		
		print json_encode($jTableResult);

		
		// print json_encode($result);
		
		
	}

}

 ?>