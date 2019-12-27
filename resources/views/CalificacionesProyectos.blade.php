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

   
    <main class="container">
        
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>idAnteProyecto</th>
                        <th>Titulo</th>
                        <th>Calificacion</th>
                    </tr>
                    </thead>
                    @foreach($CalificacionesProyectos as $CalificacionProyecto )
                    <tbody>
                    
                        <th>{{$CalificacionProyecto->idAnteProyecto}}</th>
                        <th>{{$CalificacionProyecto->tituloProyecto}}</th>
                        <th>{{$CalificacionProyecto->calificacionAnteproyecto}}</th>
                       
                    </tbody>
                    @endforeach
            </table>
      
    </main>

    <!--Archivos bootstrap para el funciomamiento-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script> 
</body>
</html>