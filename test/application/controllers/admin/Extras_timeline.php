<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Extras_timeline extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/extras-timeline');
	}
}
