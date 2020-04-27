    <?php
        $result = $this -> db
                        -> order_by("id", "desc")
                        -> where("id=".$id)
                        -> get('articulos');

        $articulo = $result -> row_array();
    ?>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
          bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    //]]>

    $(document).ready(function(){
        $("#formulario_articulo").submit(function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("formulario_articulo"));
            formData.append("descripcion", $('#descripcion').find('.nicEdit-main').html());
            formData.append("texto", $('#texto').find('.nicEdit-main').html());
            //formData.append(f.attr("name"), $(this)[0].files[0]);
            $.ajax({
                url: $(this).attr("action"),
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
	            processData: false
            })
            .done(function(data){
                alert("Cambios guardados con éxito");
                window.location="/admin/";
            });
        });

        $("#file").change(function(){
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
                $("#previewing").attr("src","/theme/img/no-image.png");
                alert("La imagen no es válida");
                return false;
            }
            else{
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $("#delete_photo").show();
            }
        });
        function imageIsLoaded(e){
            $("#file").css("color","green");
            $('#previewing').attr('src', e.target.result);
        };
    });

    </script>

</head>
<body>
<!-- /head -->

<?php
    $this->load->view('admin_menu');
?>



<div class="column">
    <br>

    <form action="/api/articulo_editar/<?php echo $articulo["id"];?>/" method="post" enctype="multipart/form-data" class="medium-8 columns" nuevo="true" autocomplete="off" id="formulario_articulo">
        <div>
            <div class="columns large-offset-2">
                <h1>Editar artículo</h1>
                    <br>
            </div>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Título</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut">
                    <input type="text" name="titulo" value="<?php echo $articulo["titulo"];?>" required/>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Tipo artículo</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut">
                    <select name="tipo_articulo" id="tipo_articulo">
                        <option value="1">Noticias</option>
                        <option value="2">Reportajes</option>
                        <option value="3">Análisis</option>
                    </select>

                    <script>
                        $(document).ready(function(){
                            $('#tipo_articulo option[value="<?php echo $articulo["tipo_articulo"];?>"]').prop('selected', true);
                        });
                    </script>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Descripción </strong></div>
                <p class="medium-9 columns end" id="descripcion">
                    <textarea name="no1"><?php echo $articulo["descripcion"];?></textarea>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Texto </strong></div>
                <p class="medium-9 columns end"  id="texto">
                    <textarea name="no2" style="height:300px"><?php echo $articulo["texto"];?></textarea>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Youtube</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut"><input type="text" name="youtube"  value="<?php echo $articulo["youtube"];?>" /></p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right">
                    <strong>Foto </strong>
                </div>
                <p class="medium-3 columns end text-center" id="infoajax_celular">
                    <img src="/uploads/<?php echo $articulo["id"];?>.jpg" id="previewing" style="width:100px">
                </p>
                <p class="medium-7 columns end" id="infoajax_celular">
                    <input type="file" name="file" id="file"/>
                </p>
            </label>
        </div>

        <div>
            <div class="columns large-offset-2">
                <button type="submit" id="enviar" class="medium button radius success"><i class="fi-check"></i> Guardar cambios</button>
            </div>
        </div>
    </form>
</div>
