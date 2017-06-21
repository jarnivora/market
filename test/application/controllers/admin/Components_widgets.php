<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Components_widgets extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/components-widgets');
	}
}
