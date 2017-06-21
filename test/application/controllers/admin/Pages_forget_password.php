<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_forget_password extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/pages-forget-password');
	}
}
