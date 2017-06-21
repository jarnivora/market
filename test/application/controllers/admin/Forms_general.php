<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms_general extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/forms-general');
	}
}
