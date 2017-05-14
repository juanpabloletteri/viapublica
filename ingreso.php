<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- icono en la parte superior -->
    <link rel="icon" href="./dist/favicon.ico">
    <!-- sweet alert -->
    <script src="./dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="./dist/sweetalert.css">
    <!-- bootstrap y jquery nuevos desde internet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bootstrap y jquery viejos desde archivo
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    -->
    <!-- bootstrapvalidator -->
    <link rel="stylesheet" href="./css/bootstrapValidator.min.css">
    <script src="./js/bootstrapValidator.min.js"></script>
    <!-- Validator.js -->
    <script src="./js/validator.js"></script>

    <title>INGRESO</title>
</head>
<body>
    <div class="container">
                <form class="well form-horizontal" action="" method="post" id="ingresoexpedientes">
            <fieldset>

                <!-- Form Name -->
                <legend>Ingreso de expedientes</legend>

                <!-- numero de expediente -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="numeroexpediente">N° Expediente:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-inbox"></i></span>
                            <input name="numeroexpediente" placeholder="Numero de expediente" class="form-control" type="number" id="numeroexpediente">
                        </div>
                    </div>
                </div>

                <!-- año expediente-->

                <div class="form-group">
                    <label for="anioexpediente" class="col-md-4 control-label">Año Expediente:</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <select name="anioexpediente" class="form-control selectpicker" id="anioexpediente">
                                <option value=2017>2017</option>
                                <option value=2016>2016</option>
                                <option value=2015>2015</option>
                                <option value=2014>2014</option>
                                <option value=2013>2013</option>
                                <option value=2012>2012</option>
   
                            </select>
                        </div>
                    </div>
                </div>

                <!-- empresa -->

                <div class="form-group">
                    <label for="empresa" class="col-md-4 control-label">Empresa:</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <select name="empresa" class="form-control selectpicker" id="empresa">

                                <optgroup label="AySA">
                                <option value="AySA">AySA</option>
                                <option value="OtrosAySA">Otros AySA</option>
                                </optgroup>

                                <optgroup label="EDESUR">
                                <option value="EdesurAlta">Edesur Alta</option>
                                <option value="EdesurMantenimiento">Edesur Mantenimiento</option>
                                <option value="EdesurMediaBaja">Edesur Media y Baja</option>
                                <option value="EdesurTelecomunicaciones">Edesur Telecomunicaciones</option>
                                <option value="OtrosEdesur">Otros Edesur</option>
                                </optgroup>

                                <optgroup label="METROGAS - YPF">
                                <option value="Cosugas">Cosugas</option>
                                <option value="EmaServicios">Ema Servicios</option>
                                <option value="Inarteco">Inarteco</option>
                                <option value="YPF">YPF</option>
                                <option value="OtrosGas">Otros Gas</option>
                                </optgroup>

                                <optgroup label="TELECOMUNICACIONES">
                                <option value="Cablevision">Cablevision</option>
                                <option value="Metrotel">Metrotel</option>				
                                <option value="Telefonica">Telefonica</option>
                                <option value="Telecentro">Telecentro</option>
                                <option value="Telmex">Telmex</option>
                                <option value="Telecom">Telecom</option>
                                <option value="OtrosTelecomunicaciones">Otros Telecomunicaciones</option>
                                </optgroup>
  
                            </select>
                        </div>
                    </div>
                </div>

                <!-- calle nombre-->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="callenombre">Calle/Avenida: </label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="callenombre" placeholder="Calle del expediente" class="form-control" type="text" id="callenombre">
                        </div>
                    </div>
                </div>

                <!-- calle numero -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="callenumero">Numero:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="callenumero" placeholder="Numero de calle" class="form-control" type="number" id="callenumero">
                        </div>
                    </div>
                </div>

                <!-- fecha ingreso -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="fechaingreso">Fecha de ingreso:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            <input name="fechaingreso" class="form-control" type="date" id="fechaingreso">
                        </div>
                    </div>
                </div>

                <!-- observaciones -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="observaciones">Observaciones:</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="observaciones" id="observaciones" placeholder="Observaciones del expediente"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Provincia</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="provincia" class="form-control selectpicker">
      <option value=" " >Seleccione su Provincia</option>
      <option>CABA</option>
      <option>Buenos Aires</option>
      <option >Cordoba</option>
      <option >Tucuman</option>
      <option >Salta</option>
      <option >Mendoza</option>
      <option >Neuquen</option>
      <option >Rio Negro</option>
      <option >Chubut</option>
      <option> Formosa</option>
      <option >Jujuy</option>
      <option >Entre Rios</option>
      <option >Santiago del Estero</option>
      <option >San Juan</option>
      <option >San Luis</option>
      <option >La Pampa</option>
      <option> Misiones</option>
      <option >Corrientes</option>
      <option >Santa Fe</option>
      <option>Santa Cruz</option>
      <option >La Rioja</option>      
      <option >Catamarca</option>
      <option >Tierra del Fuego</option>
      <option>Chaco</option>      
    </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Código Postal</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input name="codPost" placeholder="Código Postal" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">Sitio Web</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
                            <input name="sitioWeb" placeholder="Sitio Web" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- radio checks -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Tiene hosting?</label>
                    <div class="col-md-4">
                        <div class="radio">
                            <label>
                                    <input type="radio" name="hosting" value="si" /> Si
                                </label>
                        </div>
                        <div class="radio">
                            <label>
                                    <input type="radio" name="hosting" value="no" /> No
                                </label>
                        </div>
                    </div>
                </div>

                <!-- Text area -->

                <div class="form-group">
                    <label class="col-md-4 control-label">Comentarios</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <textarea class="form-control" name="comentario" placeholder="Comentarios"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-share"></span> Guardar </button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
</body>
</html>