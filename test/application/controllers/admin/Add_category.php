<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_category extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
}
	public function index()
	{
		$this->load->view('admin/add_category');
	}

	function save(){
		if ($_POST) {
			$this->form_validation->set_rules('cat', '', 'required');
			$this->form_validation->set_rules('desc', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect('admin/add_category');
 
			} 
			else{
			$form = array(
			'nama_kategori' => $this->input->post('cat'),
			'deskripsi_kategori' => $this->input->post('desc'),
		);
		$this->model_admin->insert_kategori($form);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/add_category','refresh');
			} // end of verify 
		}
	}	
}
