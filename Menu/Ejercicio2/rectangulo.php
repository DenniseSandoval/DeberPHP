<?php
    $ladoR1 = $_POST['ladoR1'];
    $ladoR2 = $_POST['ladoR2'];
    $areaR;
    $perimetroR;

    //RECTÁNGULO
    if($ladoR1>0 && $ladoR2>0 && $ladoR1!=$ladoR2){
        $areaR=$ladoR1*$ladoR2;
        $perimetroR=(($ladoR1*2)+($ladoR2*2));
    }else{
        $areaR='---';
        $perimetroR='---';
    }


?>

<!DOCTYPE html>
<html lang="en">

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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rectángulo</title>
</head>

<body>
<br><a href="../index.html" style="text-decoration: none;"><input type="button" class="btn btn-primary" value="<--Menu Principal"></a>
    <div style="display: flex; align-items: center; justify-content: center;">
        <div class="abs-center">
            <div class="align-items-center justify-content-between"><br>
                <form name="calculoAreaPerimetro" class="border p-5 form">
                    <h4 style="text-align: center;">
                        RECTÁNGULO
                    </h4><br>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Figuras Geométricas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="triangulo.html">Triángulo</a>
                                <a class="dropdown-item" href="cuadrado.html">Cuadrado</a>
                                <a class="dropdown-item" href="circulo.html">Círculo</a>
                            </div>
                        </li>
                    </ul>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                            <label for="ladoR1" class="col-form-label">Base: <?=$ladoR1?></label>
                        </div>
                        <div class="col-sm-6">
                            <label for="ladoR2" class="col-form-label">Altura: <?=$ladoR2?></label>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                            <label for="areaT" class="col-form-label">Área:</label>
                            <input type="text" class="form-control" name="areaR" disabled placeholder=<?=$areaR?>>
                        </div>
                        <div class="col-sm-6">
                            <label for="perimetroT" class="col-form-label">Perímetro:</label>
                            <input type="text" class="form-control" name="perimetroR" disabled placeholder=<?=$perimetroR?>>
                        </div>
                    </div>
                    <div class="form-group row" style="justify-content: center;">
                        <div class="col-sm-6">
                        <a href="rectangulo.html" style="text-decoration: none;"><input type="button" class="btn btn-primary btn-user btn-block" value="OTRO CÁLCULO "></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>