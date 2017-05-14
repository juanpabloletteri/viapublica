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

}
?>