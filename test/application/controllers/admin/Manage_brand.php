<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_brand extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$object=array(
			'data' => array(
			'getdata' => $this->model_admin->get_merk(),
			),
		);
		$this->load->view('admin/manage_brand', $object);
	}

	function update_merk($id){
	 if ($id == TRUE) {
      $object = array(
        'data' => array(
          'getUserWhere' => $this->model_admin->get_merk_update($id),
        ),
      );
      $this->load->view('admin/update_brand',$object);
    	}
	}
	function edit(){

		if ($_POST) {
			$this->form_validation->set_rules('merk', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect($_SERVER['HTTP_REFERER']);
 
			} 
			else{
			$id = $this->input->post('id');
			$form = array(
			'nama_merk' => $this->input->post('merk'),
		);
		$this->model_admin->update_merk($form,$id);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/manage_brand','refresh');
			} // end of verify 
		}
	
	}
	function delete($id){
		$this->model_admin->delete_merk($id);
	$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');	
      redirect('admin/manage_brand','refresh');
	}
}
