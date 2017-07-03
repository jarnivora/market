<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
	}
	public function index()
	{
		$object=array(
			'data'=> array(
			'get_kategori'=> $this->model_admin->get_kategori(),
			'get_product'=> $this->model_admin->get_product(),
				),
			);
		$this->load->view('home', $object);
	}
	function product($id){
		$object=array(
			'data'=> array(
			'get_product'=> $this->model_admin->get_detail_product($id),
			'get_kategori'=> $this->model_admin->get_kategori(),
				),
			);
		$this->load->view('product', $object);
	}
}
