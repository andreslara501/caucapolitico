<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class Api extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "hola ;)";
	}

	public function indexs()
	{
		$result = $this -> db
						-> order_by("id", "desc")
						-> where('tipo_articulo', "1")
						-> get('articulos');

		$results = $result -> result_array();

	}

	public function recortar_imagen(){

	}

	public function articulo_nuevo(){
		$data = $this -> input -> post();
		$data["fecha"] = date('Y-m-d');
		$this -> load -> model("articulos");
		$id_articulo = $this -> articulos -> set($data);
		echo $id_articulo;
		$id = preg_replace('/[^0-9]+/', '', $id_articulo);

		/* upload archivos */
		if (!empty($_FILES)){
			$tempFile = $_FILES['file']['tmp_name'];
		    $targetPath = dirname( __FILE__ ). "/../../uploads/" . $id . ".jpg";
	    	move_uploaded_file($tempFile, $targetPath);
		}else{
			echo "No se pudo subir el archivo";
		}
	}

	public function articulo_editar($id){
		$data = $this -> input -> post();
		$data["fecha"] = date('Y-m-d');
		$this -> load -> model("articulos");
		$this -> articulos -> update($data, $id);
		echo $id;
		$id = preg_replace('/[^0-9]+/', '', $id);

		/* upload archivos */
		if (!empty($_FILES)){
			$tempFile = $_FILES['file']['tmp_name'];
		    $targetPath = dirname( __FILE__ ). "/../../uploads/" . $id . ".jpg";
	    	move_uploaded_file($tempFile, $targetPath);
		}
	}

	public function contacto(){
		$result = $this -> db
                        -> where("id=1")
                        -> get("usuarios");
		$row = $result -> row_array();

		$data = $this -> input -> post();

		$mail = "Nombre: " . $data["nombre"] .
				"\nCorreo: " . $data["correo"] .
				"\nCelular / Teléfono: " . $data["celular"] .
		 		"\nMensaje: " . $data["mensaje"];
		$titulo = $row["correo"];
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: Sotware inmobiliario ".$row["correo"]."\r\n";
		$bool = mail($row["correo"], $titulo, $mail, $headers);
		if($bool){
		    echo "Mensaje enviado";
		}else{
		    echo "Mensaje no enviado";
		}
	}
}
?>
