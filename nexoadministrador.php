<?php

require ("expediente.php");
require ("./accesobasededatos/AccesoDatos.php");

if (isset($_POST['accion']))
{
	if ($_POST['accion']=="agregar") 
	{
        expediente::agregar($_POST['numeroexpediente'],$_POST['anioexpediente'],$_POST['empresa'],$_POST['callenombre'], $_POST['callenumero'], $_POST['fechaingreso'], $_POST['observaciones']);
	}
    	else if ($_POST['accion']=="tablaexpedientes") 
	{
        expediente::tablaexpedientes();
	}
}

?>