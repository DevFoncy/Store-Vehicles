var cantidad_cajas="";
var fila=0;
function agregar_salida(val){
	cantidad_cajas=	document.getElementById("cantidad_cajas"+val).value;
	nombre_color=document.getElementById("nombre_caja"+val).value;
	
	var caja_color=document.getElementById("nombre_actual");
	var caja_texto=document.getElementById("cantidad_actual");

	document.getElementById("nombre_actual1").setAttribute("value",nombre_color);
	caja_color.innerHTML=nombre_color;
	caja_texto.innerHTML="Cantidad de cajas actuales " +cantidad_cajas;

}
function verificar_cantidad(){
  //	var cantidad_cajas=	document.getElementById("cantidad_cajas"+val).value;
	var cantidad_escogida= document.getElementById("cantidad_escogida_caja").value;
	document.getElementById("boton_cerrado").setAttribute("data-dismiss","none");
	if(cantidad_escogida==""){
		alert("Ingresa una cantidad o dale en cancelar");
	}
	else{

		if(cantidad_escogida < 0){
			alert("Ingrese una cantidad valida");
			document.getElementById("cantidad_escogida_caja").value="";
		}
		else{
			if(cantidad_escogida> cantidad_cajas && cantidad_cajas!=""){
				alert("Tu cantidad debe ser menor o igual a la cantidad que existe");
				document.getElementById("cantidad_escogida_caja").value="";
			}
			else{
			 	fila++;
			 	document.getElementById("boton_cerrado").setAttribute("data-dismiss","modal");
			 	var tr= document.createElement('tr');
			 	tr.setAttribute("id","salida"+fila);
			 	var nombre=document.getElementById("nombre_actual1").value;

			 	tr.innerHTML='<td bgcolor="white" align="middle">'+fila+'</td>'+'<td bgcolor="white" align="middle">'+nombre+'</td>'+'<td bgcolor="white" align="middle" >'
			 	+cantidad_escogida+'</td>'+'<td bgcolor="white" align="middle" ><button onclick="quitar_lista('+fila+')" type="button"><span class="glyphicon glyphicon-minus"></span></button></td> ';
			 	document.getElementById('lista_final').appendChild(tr);
			}
		}

	}
}
function quitar_lista(numero){
		var list= document.getElementById("salida"+numero);
		while (list.hasChildNodes()) {   
    		list.removeChild(list.firstChild);
		}
}

function mandar_salida(){
	swal({
			  title: "Mensaje de Alerta",
			  text: "Estas seguro de registrar esta informacion? ",
			  type: "info",
			  showCancelButton: true,
			  confirmButtonColor: "#91B0EF",
			  confirmButtonText: "Si, deseo mandar",
			  closeOnConfirm: false
			},
			function(){
				document.getElementById("post_registro").submit();

			});
	}
	