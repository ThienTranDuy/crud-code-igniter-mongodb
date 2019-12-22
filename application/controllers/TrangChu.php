<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrangChu extends CI_Controller {

	public function index()
	{
		$data['main'] = 'pages/kendo-gird';
		
		$this->load->view('master', $data);
	}
}
