<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1{
            color:blue;
        }
    </style>

</head>
<body>
    <h1>Correo Electrónico</h1>

    <p>Primer correo</p>

    <p><strong>Nombre: </strong>{{$data['name']}}</p>
    <p><strong>E-mail: </strong>{{$data['email']}}</p>
    <p><strong>Mensaje: </strong>{{$data['mensaje']}}</p>
</body>
</html>