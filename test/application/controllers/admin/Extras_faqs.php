<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extras_faqs extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/extras-faqs');
	}
}
