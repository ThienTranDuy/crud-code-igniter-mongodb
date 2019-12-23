<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NhanVien extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Nhân Viên';
		$data['page'] = 'pages/nhanvien';

		$this->load->library('mongo_db', array('activate'=>'default'),'mongo_db2');
		$data['nhanvien'] = $this->mongo_db2->select(['user_name','user_mail'])->get("nhanvien");
		$this->load->view('master', $data);
	}

	public function data_submitted()
	{
		$this->load->library('mongo_db', array('activate'=>'default'),'mongo_db2');

		$user_name = $this->input->post('name');
		$user_mail = $this->input->post('email');
		$data = ['user_name' => $user_name, 'user_mail' => $user_mail];

		$this->mongo_db2->insert('nhanvien',$data);

		$this->index();
	}

	public function data_destroy()
	{
		$this->load->library('mongo_db', array('activate'=>'default'),'mongo_db2');

		$user_id = $this->input->post('user_id');

		$this->mongo_db2->Delete('nhanvien', $user_id);

		// $this->index();
	}

	public function api()
	{
		$this->load->library('mongo_db', array('activate'=>'default'),'mongo_db2');
		$nhanvien_items = $this->mongo_db2->select(['user_name','user_mail'])->get("nhanvien");
		print_r($nhanvien_items);
	}
}
