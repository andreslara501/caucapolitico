<!doctype html>
<!-- head -->
<html class="no-js" lang="" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cauca Político</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/theme/img/favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- fundation -->
    <link rel="stylesheet" href="/theme/foundation/css/foundation.css" />
    <script src="/theme/foundation/js/vendor/modernizr.js"></script>
    <!-- /fundation -->

    <link rel="stylesheet" type="text/css" href="/theme/css/stylesheets/basic.css">



    <?php
        if($menu==3){
            if(isset($id)){
                $result = $this -> db
                                -> order_by("id", "desc")
                                -> where("id=".$id)
                                -> get('articulos');

                $articulo = $result -> row_array();
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/analisis/articulo/<?php echo $articulo["id"];?>/" />
                <meta property="og:description" content="<?php echo strip_tags($articulo["descripcion"]);?>" />
                <meta property="og:title"  content="<?php echo $articulo["titulo"];?>" />
                <meta property="og:image"  content="http://caucapolitico.com/uploads/<?php echo $articulo["id"];?>.jpg"/>
                <?
            }else{
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/analisis/" />
                <meta property="og:description" content="Todo el análisis en Cauca Político" />
                <meta property="og:title"  content="Análisis político - Caucapolitico.com" />
                <meta property="og:image"  content="http://caucapolitico.com/theme/img/logo.png"/>
                <?
            }
        }

        if($menu==2){
            if(isset($id)){
                $result = $this -> db
                                -> order_by("id", "desc")
                                -> where("id=".$id)
                                -> get('articulos');

                $articulo = $result -> row_array();
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/reportajes/articulo/<?php echo $articulo["id"];?>/" />
                <meta property="og:description" content="<?php echo strip_tags($articulo["descripcion"]);?>" />
                <meta property="og:title"  content="<?php echo $articulo["titulo"];?>" />
                <meta property="og:image"  content="http://caucapolitico.com/uploads/<?php echo $articulo["id"];?>.jpg"/>
                <?
            }else{
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/reportajes/" />
                <meta property="og:description" content="Todos los reportajes en Cauca Político" />
                <meta property="og:title"  content="Reportajes políticos - Caucapolitico.com" />
                <meta property="og:image"  content="http://caucapolitico.com/theme/img/logo.png"/>
                <?
            }
        }


        if($menu==1){
            if(isset($id)){
                $result = $this -> db
                                -> order_by("id", "desc")
                                -> where("id=".$id)
                                -> get('articulos');

                $articulo = $result -> row_array();
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/noticias/articulo/<?php echo $articulo["id"];?>/" />
                <meta property="og:description" content="<?php echo strip_tags($articulo["descripcion"]);?>" />
                <meta property="og:title"  content="<?php echo $articulo["titulo"];?>" />
                <meta property="og:image"  content="http://caucapolitico.com/uploads/<?php echo $articulo["id"];?>.jpg"/>
                <?
            }else{
                ?>
                <meta property="og:type"   content="article" />
                <meta property="og:url"    content="http://caucapolitico.com/noticias/" />
                <meta property="og:description" content="Todas las noticias políticas del Cauca en caucapolitico.com" />
                <meta property="og:title"  content="Noticias políticas - Caucapolitico.com" />
                <meta property="og:image"  content="http://caucapolitico.com/theme/img/logo.png"/>
                <?
            }
        }
    ?>




</head>
<body>
<!-- /head -->

<!-- body -->

<div id="body" class="medium-9 medium-centered columns clearfix">
	<div id="header">
		<nav id="menu-responsive" class="top-bar" data-topbar>
			<ul id="menu-title-area" class="title-area">
				<li class="toggle-topbar menu-icon" style="background: black;">
					<a href="#"><span></span></a>
				</li>
				<li class="name">
					<h1><a href="/" id="logo" class="visible-for-large-up"><img src="/theme/img/logo.png" ></a></h1>
                    <h1  style=" text-align: center"><a href="/" id="logo" class="visible-for-medium-only"><img src="/theme/img/logo.png" style="height: 70px;"></a></h1>
                    <div style=" text-align: center">
                        <a href="/" id="logo" class="visible-for-small-only"><img src="/theme/img/logo.png" style="height: 40px; margin: 5px 0px"></a>
                    </div>
				</li>
			</ul>

			<section class="top-bar-section">
				<ul id="menu" class="right">
					<li <?php if($menu==0){echo "class=\"active\"";}?>><a href="/">Inicio</a></li>
					<li <?php if($menu==1){echo "class=\"active\"";}?>><a href="/noticias/">Noticias</a></li>
					<li <?php if($menu==2){echo "class=\"active\"";}?>><a href="/reportajes/">Reportajes</a></li>
					<li <?php if($menu==3){echo "class=\"active\"";}?>><a href="/analisis/">Análisis</a></li>
					<li <?php if($menu==4){echo "class=\"active\"";}?>><a href="/contacto/">Contacto</a></li>
                    <li style="margin-right: 10px"><a href="https://www.facebook.com/CAUCA-Politico-1933147976910281/?fref=ts" target="_blank" class="visible-for-medium-up"><img src="/theme/img/facebook.png"  style="margin: 0px"></a></li>
                    <li><a href="https://twitter.com/caucapolitico1" id="logo" class="visible-for-medium-up" target="_blank" ><img src="/theme/img/twitter.png"  style="margin: 0px"></a></li>
				</ul>
			</section>
		</nav>
	</div>
