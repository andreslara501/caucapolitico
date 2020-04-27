<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportajes extends CI_Controller {
	public function index()
	{
		$data_menu["menu"] = 2;
		$this -> load -> view('head', $data_menu);
		$this -> load -> view('reportajes');
		$this -> load -> view('foot');
	}

	public function articulo($id)
	{
		$data_menu["menu"] = 2;
		$data_menu["id"] = $id;
		$this -> load -> view('head', $data_menu);
		$data['id'] = $id;
		$this -> load -> view('reportajes-articulo', $data);
		$this -> load -> view('foot');
	}
}
?>
