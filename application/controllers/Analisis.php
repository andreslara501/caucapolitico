<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisis extends CI_Controller {
	public function index()
	{
		$data_menu["menu"] = 3;
		$this -> load -> view('head', $data_menu);
		$this -> load -> view('analisis');
		$this -> load -> view('foot');
	}
	
	public function articulo($id)
	{
		$data_menu["menu"] = 3;
		$data_menu["id"] = $id;
		$this -> load -> view('head', $data_menu);
		$data['id'] = $id;
		$this -> load -> view('analisis-articulo', $data);
		$this -> load -> view('foot');
	}
}
?>
