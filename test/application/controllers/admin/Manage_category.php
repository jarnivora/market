<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_category extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$object=array(
			'data' => array(
			'getdata' => $this->model_admin->get_kategori(),
			),
		);
		$this->load->view('admin/manage_category', $object);
	}

	function update_kategori($id){
	 if ($id == TRUE) {
      $object = array(
        'data' => array(
          'getUserWhere' => $this->model_admin->get_kategori_update($id),
        ),
      );
      $this->load->view('admin/update_category',$object);
    	}
	}
	function edit(){

		if ($_POST) {
			$this->form_validation->set_rules('cat', '', 'required');
			$this->form_validation->set_rules('desc', '', 'required');
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('notification', '<div class="alert alert-danger">Some data is null</div>');
				redirect($_SERVER['HTTP_REFERER']);
 
			} 
			else{
			$id = $this->input->post('id');
			$form = array(
			'nama_kategori' => $this->input->post('cat'),
			'deskripsi_kategori' => $this->input->post('desc'),
		);
		$this->model_admin->update_kategori($form,$id);
		$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');
		redirect('admin/manage_category','refresh');
			} // end of verify 
		}
	
	}
	function delete($id){
		$this->model_admin->delete_kategori($id);
	$this->session->set_flashdata('notification', '<div class="alert alert-success">Success</div>');	
      redirect('admin/manage_category','refresh');
	}
}
