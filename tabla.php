<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TABLA</title>

    <!-- icono en la parte superior -->
    <link rel="icon" href="./dist/favicon.png">
    <!-- sweet alert -->
    <script src="./dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="./dist/sweetalert2.min.css">
    <!-- bootstrap y jquery nuevos desde internet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bootstrap y jquery viejos desde archivo
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    -->
    <!-- Funciones.js -->
    <script src="./js/funciones.js"></script>
    <!-- datatable -->
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
</head>
<body>

    <button type="button" class="btn btn-success" onclick="tablaexpedientes()"><span class="glyphicon glyphicon-list"></span> Lista </button>

    <section>
        <div class="container" id="tablaexp"></div>
    </section>
    

</div>
</body>
</html>