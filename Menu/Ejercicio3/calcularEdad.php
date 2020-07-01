<?php
    $fechaNacimiento= $_POST['fecha'];
    $fecha = strtotime($fechaNacimiento);
    $anio = date("Y", $fecha);
    $mes = date("m", $fecha);
    $dia = date("d", $fecha);
    //fecha actual
    $anioActual=date("Y");
    $mesActual=date("m");
    $diaActual=date("d");

    if (($mes == $mesActual) && ($dia > $diaActual)) {
        $anioActual=($anioActual-1); 
    }else if ($mes > $mesActual) {
        $anioActual=($anioActual-1);
    }
    $edad=($anioActual-$anio);
?>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <div style="display: flex;align-items: center;justify-content: center;">
        <div class="abs-center">
            <div class=" align-items-center justify-content-between ">
                <h4 style="text-align: center; margin-top: 50px;">Calculo de edad a partir de fecha de nacimiento</h4><br>
                <p><strong>Fecha de nacimiento ingresada:</strong> <?=$fechaNacimiento?></p>
                <p><strong>Su edad es:</strong> <?= $edad?></p>
            </div>
        </div>
    </div>      
</body>
</html>