<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_history extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/payment_history');
	}
}
