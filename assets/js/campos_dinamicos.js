$(document).ready(function() {
    /* Botones de agregar y disminuir para el Color Puro*/
    $("#add").click(function() {
        var id_Color=$("#Color input").length+1;
        var id_Cantidad=$("#Cantidad input").length+1;
        var id_Caja=$("#Cajas input").length+1;
        

        var fColor = $("<input  type=\"text\" size=\"25\" placeholder=\"Ingrese el color aqui \" class=\"color\" id=\"color" + id_Color + "\"/>");
        var fCantidad = $("<input type=\"number\" onchange=\"validar("+id_Cantidad+")\" class=\"cantidad\" id=\"cantidad" + id_Cantidad + "\" />");
        var fCajas = $("<input type=\"number\" class=\"caja\" id=\"caja" + id_Caja + "\"/>");
       
        var fImagen= $("<span name=\"sclase\" id=\"imagen"+id_Cantidad+"\"/>");

        $("#Color").append(fColor);
        $("#Cantidad").append(fCantidad);
        $("#Cajas").append(fCajas);
        $("#Imagen").append(fImagen);

    });

    $("#less").click(function(){
        var cantidad=$("#Color input").length;
        $("#color"+cantidad).remove();
        $("#caja"+cantidad).remove();
        $("#cantidad"+cantidad).remove();
    });
    $("#color_puro").click(function(){
        $("#ColorMezclado").hide();
        $("#CajaColor").show();
    });
    $("#color_mezclado").click(function(){
        $("#CajaColor").hide();
        $("#ColorMezclado").show();

    });


    /* Botones de agregar y disminuir para Colores Mezclados*/
    $("#add2").click(function() {
        var id_Color=$("#Colorm input").length+1;
        var id_Cantidad=$("#Cantidadm input").length+1;
     
        var fColor = $("<input type=\"text\" size=\"30\" placeholder=\"Ingrese el color aqui \" class=\"color\" id=\"colorm" + id_Color + "\"/>");
        var fCantidad = $("<input type=\"number\" class=\"cantidad\" id=\"cantidadm" + id_Cantidad + "\" />");
             
        $("#Colorm").append(fColor);
        $("#Cantidadm").append(fCantidad);

    });

    $("#less2").click(function(){
        var cantidad2=$("#Colorm input").length;
        $("#colorm"+cantidad2).remove();
        $("#cantidadm"+cantidad2).remove();
    });

});

    // $("#div_color_puro").on("mouseenter", function(){
    //      $( this ).css({
    //         "color": "red"
    //      });

    // });
    // $("#div_color_puro").on("mouseleave", function(){
    //      var styles = {
    //         "color" : "black",      
    //     };
    // $( this ).css( styles );       
    // });