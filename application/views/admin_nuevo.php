    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
          bkLib.onDomLoaded(function(){
              var myInstance = new nicEditor().panelInstance('no2');
              myInstance.addEvent('blur', function(){
                  $("#texto").val($("#no2").val());
              });
          });


    //]]>

    $(document).ready(function(){
        $("#formulario_articulo").submit(function(e){
            e.preventDefault();
            $.ajax({
                url: $(this).attr("action"),
                type: "post",
                data: $("#formulario_articulo").serialize()
            })
            .done(function(data){
                //alert("Artículo publicado");
                //window.location="/admin/";
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

    <form action="/api/articulo_nuevo/" method="post" enctype="multipart/form-data" class="medium-8 columns" nuevo="true" autocomplete="off" id="formulario_articulo">
        <div>
            <div class="columns large-offset-2">
                <h1>Nuevo artículo</h1>
                    <br>
            </div>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Título</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut"><input type="text" name="titulo" required/></p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Tipo artículo</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut">
                    <select name="tipo_articulo">
                        <option value="1">Noticias</option>
                        <option value="2">Reportajes</option>
                        <option value="3">Análisis</option>
                    </select>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Descripción </strong></div>
                <p class="medium-9 columns end" id="descripcion">
                    <textarea name="no1"></textarea>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Texto </strong></div>
                <p class="medium-9 columns end">
                    <textarea name="no2" style="height:300px" id="no2"></textarea>
                    <textarea name="texto" style="height:300px" id="texto"></textarea>
                </p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right"><strong>Youtube</strong></div>
                <p class="medium-9 columns end" id="infoajax_numero_nitrut"><input type="text" name="youtube"/></p>
            </label>
        </div>

        <div>
            <label>
                <div class="medium-2 columns field_title text-right">
                    <strong>Foto </strong>
                </div>
                <p class="medium-3 columns end text-center" id="infoajax_celular">
                    <img src="../../theme/img/camara.png" id="previewing" style="width:100px">
                </p>
                <p class="medium-7 columns end" id="infoajax_celular">
                    <input type="file" name="file" id="file"/>
                </p>
            </label>
        </div>

        <div>
            <div class="columns large-offset-2">
                <button type="submit" id="enviar" class="medium radius success"><i class="fi-check"></i> Crear artículo</button>
            </div>
        </div>
    </form>
</div>
