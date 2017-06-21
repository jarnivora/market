<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables_advanced extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/tables-advanced');
	}
}
