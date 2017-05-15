<?php
class expediente
{

    public static function agregar($numeroexpediente, $anioexpediente, $empresa, $callenombre, $callenumero, $fechaingreso, $observaciones)
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
            INSERT into 
            expedientes (numeroexp, anioexp, empresa, callenombre, callenumero, fechaingreso, observaciones)
            values(:numeroexpediente, :anioexpediente, :empresa, :callenombre, :callenumero, :fechaingreso, :observaciones)"
            );
        $consulta->bindValue(':numeroexpediente',$numeroexpediente, PDO::PARAM_STR);
        $consulta->bindValue(':anioexpediente',$anioexpediente, PDO::PARAM_STR);
        $consulta->bindValue(':empresa',$empresa, PDO::PARAM_STR);
        $consulta->bindValue(':callenombre',$callenombre, PDO::PARAM_STR);
        $consulta->bindValue(':callenumero',$callenumero, PDO::PARAM_STR);
        $consulta->bindValue(':fechaingreso',$fechaingreso, PDO::PARAM_STR);
        $consulta->bindValue(':observaciones',$observaciones, PDO::PARAM_STR);
        //$consulta->bindValue(':operador',$_SESSION['usuario'], PDO::PARAM_STR);
        $consulta->execute();
    }

    public static function tablaexpedientes()
    {
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from expedientes");
		$consulta->execute();			
		$array= $consulta->fetchAll(PDO::FETCH_ASSOC);	

		$tabla= "
        <script type='text/javascript' class='init'>
            $(document).ready(function() {
                $('#tabla').DataTable();
            } );
        </script>

        <table id='tabla' class='display' cellspacing='0' width='100%'>
				<thead>
					<tr>
						<th>ID</th>
						<th>Numero Exp</th>
						<th>Año Exp</th>
						<th>Empresa</th>
						<th>Eliminar/Modificar</th>
					</tr>
				</thead>

					<tbody>";
			foreach ($array as $expedienteaux)
			{
				$id=$expedienteaux["id"];
				$tabla.= " 	<tr>
							<td>".$expedienteaux["id"]."</td>
							<td>".$expedienteaux["numeroexp"]."</td>
							<td>".$expedienteaux["anioexp"]."</td>
							<td>".$expedienteaux["empresa"]."</td>
							<td><input type='button' class='btn btn-danger' value='Eliminar' onclick='eliminarexpediente($id)'>
							<input type='button' class='btn btn-warning' value='Modificar' onclick='modificarexpediente($id)'></td>
							</tr>";
			}
			"</tbody>
		</table>";	
	    var_dump($tabla);
		return $tabla;

	}

}
?>