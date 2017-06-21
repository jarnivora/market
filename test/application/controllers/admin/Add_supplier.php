<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_supplier extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
}
	public function index()
	{
		$this->load->view('admin/add_supplier');
	}
	
	function save(){
		if ($_POST) {
			$this->form_validation->set_rules('username', '', 'required');
			$this->form_validation->set_rules('phone', '', 'required');
			$this->form_validation->set_rules('pic', '', 'required');
			$this->form_validation->set_rules('address', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect('admin/add_supplier');
 
			} 
			else{
			$form = array(
			'nama_supplier' => $this->input->post('username'),
			'no_hp' => $this->input->post('phone'),
			'nama_penanggungjawab' => $this->input->post('pic'),
			'alamat' => $this->input->post('address'),
		);
		$this->model_admin->insert_supplier($form);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/add_supplier','refresh');
			} // end of verify 
		}
	}	

}
