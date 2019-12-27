<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

    <header class="container">
    @yield('encabezado')
    </header>
    <main class="container">
        <h1 class="container">Anteproyectos</h1>
        <!--Se van a mostrar todos los anteproyectos-->
        <table>
           <tr>
                <thead>
                    <th>No.AnteProyecto</th>
                    <th>Titulo</th>
                   <th>Revisar</th>
                   <th>Desempeño </th>
                </thead>
           </tr>
           <tbody>
           <!--Se recorren los registros que contiene la tabla de anteproyectos-->
           @foreach($anteproyectos as $anteproyecto)
                    <tr>
                        <td>{{$anteproyecto->idAnteProyecto}}</td>
                        <td>{{$anteproyecto->tituloProyecto}}</td>
                        <td><a href='RevisarAnteproyecto/{{$anteproyecto->idAnteProyecto}}'>
                        Detalle </a></td>
                        <td><a href='CalificacionesProyectos/{{$anteproyecto->idAnteProyecto}}'>
                        Ver Calificaciones </a></td>
                    </tr>
                @endforeach
           </tbody>
                
               
        </table>
    </main>

    <!--Archivos bootstrap para el funciomamiento-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script> 
</body>
</html>