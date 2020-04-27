<!doctype html>
<!-- head -->
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- fundation -->
    <link rel="stylesheet" href="../theme/foundation/css/foundation.css" />
    <script src="../theme/foundation/js/vendor/modernizr.js"></script>
    <!-- /fundation -->
</head>
<body>
<!-- /head -->

<?php
    $this->load->view('admin_menu');
?>



<div class="column">
    <br>
    <h2>Reportajes</h2>
    <table style="width:100%">
        <thead>
            <tr>
                <th width="120">Fecha</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $this -> db
                            -> order_by("id", "desc")
                            -> where('tipo_articulo', "2")
                            -> get('articulos');

            foreach ($result -> result() as $row){
                echo "
                <tr>
                    <td>". $row -> fecha ."</td>
                    <td><a href=\"/admin/editar/". $row -> id ."/\" style=\"display:block\">". $row -> titulo ."</a></td>
                </tr>";
            }
            ?>
          </tbody>
    </table>
</div>
