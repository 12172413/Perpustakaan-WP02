<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Home extends CI_controller {

	public function index()
	{
		$data = 
		[
			'title' => 'Dashboard',
			'subtitle' => 'Home',
			'content' => 'dashboard/home'
		];
		$this->load->view('template/my_template', $data);
	}
	public function home2()
	{
		$this->load->view('dashboard/home2');
	}
}
?>