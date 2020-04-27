<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {
	public function index()
	{
		$data_menu["menu"] = 1;
		$this -> load -> view('head', $data_menu);
		$this -> load -> view('noticias');
		$this -> load -> view('foot');
	}

	public function articulo($id)
	{
		$data_menu["menu"] = 1;
		$data_menu["id"] = $id;
		$this -> load -> view('head', $data_menu);
		$data['id'] = $id;
		$this -> load -> view('noticias-articulo', $data);
		$this -> load -> view('foot');
	}
}
?>
