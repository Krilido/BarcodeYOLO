<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawai extends CI_Controller
{
	public function index()
	{
		$this->load->view('header_sidebar');
	    $this->load->view('pegawai_view');
		$this->load->view('footer');	
	}
	
	public function listpegawai()
	{
		$this->load->model('pegawai_model');
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_pegawai = $this->pegawai_model->get_all_pegawai();
		$result = $this->pegawai_model->get_all_paging_sorting_pegawai($jtStartIndex,$jtPageSize,$jtSorting);

		$rows = $result->result_array(); 
		$recordCount = $all_pegawai->num_rows(); 
		$jTableResult = array(); 
		$jTableResult['Result'] = "OK"; 
		$jTableResult['TotalRecordCount'] = $recordCount; 
		$jTableResult['Records'] = $rows; 
		print json_encode($jTableResult);
	}

	public function updatepegawai()
	{
		$this->load->model('pegawai_model');
		$NIK = $this->input->post('NIK');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$alamat_pegawai = $this->input->post('alamat_pegawai');

		$result = $this->pegawai_model->post_update_pegawai($NIK,$nama_pegawai,$jabatan,$alamat_pegawai);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	public function nonaktifpegawai()
	{
		$this->load->model('pegawai_model');
		$NIK = $this->input->post('NIK');

		$result = $this->pegawai_model->post_nonaktif_pegawai($NIK);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
}
?>