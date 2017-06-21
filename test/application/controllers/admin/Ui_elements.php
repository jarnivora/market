<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui_elements extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/ui-elements');
	}
}
