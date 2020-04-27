<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Model
{
    function get()
    {
        $result = $this -> db
                        -> order_by("nombre", "asc")
                        -> where('activo', "1")
                        -> get('clientes');

        return json_encode($result -> result_array(), JSON_PRETTY_PRINT);
    }

    function update($data, $id)
    {
        unset($data["no1"]);
        unset($data["no2"]);

        $result = $this -> db -> update("articulos", $data, "id = ".$id);
        $result_array[0] = $id;
        return json_encode($result_array, JSON_PRETTY_PRINT);
    }

    function set($data)
    {
        unset($data["no1"]);
        unset($data["no2"]);
        $result = $this -> db -> insert("articulos", $data);
        return $this -> db -> insert_id();
    }

    function delete($id)
    {
        $this -> db -> update('clientes', array("activo" => 0), "id = ".$id);
        return "deleted";
    }
}
?>
