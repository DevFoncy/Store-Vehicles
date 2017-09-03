


function mandar_registro(){
	var stock_caja=document.getElementById("stock_total_caja").value;

	if(document.getElementById("codigo_producto").value=='')
		alert("Ingrese un codigo de producto");

	else{
		if(stock_caja<0){
			alert("Ingrese un numero de caja positivo");
			document.getElementById("stock_total_caja").value="";
		}
		else{
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
}
}

function mandar_productos(producto){
	var producto2= document.getElementById(producto).value;
	//alert(producto2);
	//window.location="almacen_salida_ventas.html"
	document.getElementById("busqueda_producto").setAttribute("value",producto2);

}
function llamar_almacen(){
	window.location="almacen_inventario.html";
}
function validar(numero,e){
		 var valor_unidad_caja=document.getElementById("cantidad"+numero).value;
		 var stock_caja=document.getElementById("stock_total_caja").value;
		 if(stock_caja!='' && valor_unidad_caja!=''){
		 	if(valor_unidad_caja<=stock_caja ){
	     	 	document.getElementById("imagen"+numero).setAttribute("class","glyphicon glyphicon-ok");	

		 	//alert("El número ingresado es mayor que el stock ingresado");
		 	}
		 	else{
		 		document.getElementById("cantidad"+numero).value="";
		 		document.getElementById("boton_cerrado").setAttribute("class","glyphicon glyphicon-remove");
		 	}
		 }
		 
}
function ingresar_categoria(valor){
	var categoria=document.getElementById("categoria"+valor).value;
	document.getElementById("categoria_name").setAttribute("value",categoria);

}

 	