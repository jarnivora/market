<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
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
		$this->load->view('product', $object);
	}
	function product($id){
		$object=array(
			'data'=> array(
			'get_product'=> $this->model_admin->get_product($id),
			'get_kategori'=> $this->model_admin->get_kategori(),
				),
			);
		$this->load->view('product', $object);
	}
}
