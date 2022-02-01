<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>

</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>la orden {{$id}} fue procesada con un total de {{$total}} y impuestos {{$impuesto}} </p>
    <div  >
        <div   style="flex:1;  ">
            @foreach ($productos as $producto)
            <p>producto: {{ $producto }}</p>
            @endforeach
        </div>
        <div style = "flex:1; ;  " >
            @foreach ($cantidades as $cantidad)
            <p>cantidad: {{ $cantidad }}</p>
            @endforeach
        </div>
    </div>
   
</body>

</html>