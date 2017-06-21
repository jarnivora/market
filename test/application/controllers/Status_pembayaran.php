<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status_pembayaran extends CI_Controller {

	public function index()
	{
		$this->load->view('status-pembayaran');
	}
}
