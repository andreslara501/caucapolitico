<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('head-admin');
		$this->load->view('admin');
	}
	public function nuevo()
	{
		$this->load->view('head-admin');
		$this->load->view('admin_nuevo');
	}
	public function reportajes()
	{
		$this->load->view('head-admin');
		$this->load->view('admin_reportajes');
	}
	public function analisis()
	{
		$this->load->view('head-admin');
		$this->load->view('admin_analisis');
	}
	public function editar($id)
	{
		$data['id'] = $id;
		$this -> load -> view('head-admin');
		$this -> load -> view('admin_editar', $data);
	}
}
