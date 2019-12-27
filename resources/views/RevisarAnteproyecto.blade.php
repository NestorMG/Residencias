<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revisar Anteproyecto</title>
</head>
<body>
    <!--Vamos a  visualizar los detalles del proyecto-->
    <main>
    @foreach($revisarAnteproyectos as $revisarAnteproyecto)

        <h2>Titulo del Proyecto:{{$revisarAnteproyecto->tituloProyecto}}</h2>
        <h2>Objetivos</h2>
    
        <h3>Generales</h3>
        <p>{{$revisarAnteproyecto->objetivoGeneral}}</p>
        <h3>Especificos</h3>
        <p>{{$revisarAnteproyecto->objetivoEspecifico}}</p>
        <h2>Justificacion</h2>
        <p>{{$revisarAnteproyecto->justificacion}}</p>
        <h2>Cronograma</h2>

        <form action="{{route('revision.store')}}" method="post">
        @csrf
        <input type="hidden" name="txtAsesor" value="asesor1234">
        <input type="hidden" name="txtProyecto" value='{{$revisarAnteproyecto->idAnteProyecto}}'>
        <label for="">Calificacion</label>
        <input type="text" name="txtCalificacion" id="" >
        <input type="submit" value="Calificar">
    </form>
    @endforeach
    <!--Vamos a crear un form para mandar la calificacion de esos bros-->
   
    </main>
       
</body>
</html>