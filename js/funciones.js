function tablaexpedientes(){

	var f=$.ajax
	(
		{
			url:"nexoadministrador.php",
			type:"post",
			data:
			{
				accion:"tablaexpedientes",
			}
		}
	);
	f.done
	(
		function(algo) 
		{
			$("#tablaexp").html(algo);
		}
	);	

 
}