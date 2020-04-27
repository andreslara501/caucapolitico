<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
	public function index()
	{
		$data_menu["menu"] = 4;
		$this -> load -> view('head', $data_menu);
		$this -> load -> view('contacto');
		$this -> load -> view('foot');
	}
}
?>
