<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NhanVien extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Nhân Viên';
		$data['page'] = 'pages/nhanvien';
		$this->load->view('master', $data);

		$this->load->library('mongo_db', array('activate'=>'default'),'mongo_db2');
	}
}
