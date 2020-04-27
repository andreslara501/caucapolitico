    $(document).ready(function(){
        $("#contacto_formulario_form").submit(function(e){
            /*Envio datos y espero respuesta de inmuebles*/
            $.ajax({
                url: $(this).attr("action"),
                type: 'POST',
                data: $(this).serialize()
            })
            .done(function(data){
                $("#contacto_formulario_form").fadeOut(function(){
                    $("#enviado").fadeIn();
                });
            });
            e.preventDefault();
        });
    });
