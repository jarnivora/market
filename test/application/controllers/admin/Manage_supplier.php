<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_supplier extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}
	
	public function index()
	{
		$object=array(
			'data' => array(
			'getdata' => $this->model_admin->get_supplier(),
				),
			);	
		$this->load->view('admin/manage_supplier',$object);
	}
	
	function update_supplier($id){
	 if ($id == TRUE) {
      $object = array(
        'data' => array(
          'getUserWhere' => $this->model_admin->get_supplier_update($id),
        ),
      );
      $this->load->view('admin/update_supplier',$object);
    	}
	}
	function edit(){

		if ($_POST) {
			$this->form_validation->set_rules('username', '', 'required');
			$this->form_validation->set_rules('phone', '', 'required');
			$this->form_validation->set_rules('pic', '', 'required');
			$this->form_validation->set_rules('address', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect($_SERVER['HTTP_REFERER']);
 
			} 
			else{
			$id = $this->input->post('id');
			$form = array(
			'nama_supplier' => $this->input->post('username'),
			'no_hp' => $this->input->post('phone'),
			'nama_penanggungjawab' => $this->input->post('pic'),
			'alamat' => $this->input->post('address'),
		);
		$this->model_admin->update_supplier($form,$id);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/manage_supplier','refresh');
			} // end of verify 
		}
	
	}
	function delete($id){
		$this->model_admin->delete_supplier($id);
	$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');	
      redirect('admin/manage_supplier','refresh');
	}	

}
