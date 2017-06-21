<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_brand extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
}
	public function index()
	{
		$this->load->view('admin/add_brand');
	}

	function save(){
		if ($_POST) {
			$this->form_validation->set_rules('merk', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect('admin/add_brand');
 
			} 
			else{
			$form = array(
			'nama_merk' => $this->input->post('merk'),
		);
		$this->model_admin->insert_merk($form);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/add_brand','refresh');
			} // end of verify 
		}
	}	
}
