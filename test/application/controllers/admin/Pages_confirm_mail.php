<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages_confirm_mail extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/pages-confirm-mail');
	}
}
