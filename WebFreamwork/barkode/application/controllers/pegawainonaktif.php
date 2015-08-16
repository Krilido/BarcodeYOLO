<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pegawainonaktif extends CI_Controller
{
	public function index()
	{
		$this->load->view('header_sidebar');
	    $this->load->view('pegawai_view_nonaktif');
		$this->load->view('footer');	
	}
	
	public function listpegawainonaktif()
	{
		$this->load->model('pegawai_model_nonaktif');
		$jtStartIndex = $this->input->get('jtStartIndex'); 
		$jtPageSize = $this->input->get('jtPageSize'); 
		$jtSorting = $this->input->get('jtSorting'); 
		
		$all_pegawai = $this->pegawai_model_nonaktif->get_all_pegawai();
		$result = $this->pegawai_model_nonaktif->get_all_paging_sorting_pegawai($jtStartIndex,$jtPageSize,$jtSorting);

		$rows = $result->result_array(); 
		$recordCount = $all_pegawai->num_rows(); 
		$jTableResult = array(); 
		$jTableResult['Result'] = "OK"; 
		$jTableResult['TotalRecordCount'] = $recordCount; 
		$jTableResult['Records'] = $rows; 
		print json_encode($jTableResult);
	}

	public function updatepegawainonaktif()
	{
		$this->load->model('pegawai_model_nonaktif');
		$NIK = $this->input->post('NIK');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$jabatan = $this->input->post('jabatan');
		$alamat_pegawai = $this->input->post('alamat_pegawai');

		$result = $this->pegawai_model_nonaktif->post_update_pegawai($NIK,$nama_pegawai,$jabatan,$alamat_pegawai);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	public function aktifkanpegawai()
	{
		$this->load->model('pegawai_model_nonaktif');
		$NIK = $this->input->post('NIK');

		$result = $this->pegawai_model_nonaktif->post_aktif_pegawai($NIK);

		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
}
?>