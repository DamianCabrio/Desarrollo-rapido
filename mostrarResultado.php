<?php

function calculaedad($fechanacimiento){
    list($ano,$mes,$dia) = explode("-",$fechanacimiento);
    $ano_diferencia  = date("Y") - $ano;
    $mes_diferencia = date("m") - $mes;
    $dia_diferencia   = date("d") - $dia;
    if ($dia_diferencia < 0 || $mes_diferencia < 0)
        $ano_diferencia--;
    return $ano_diferencia;
}

foreach ($_POST["fechas"] as $fecha){
    $grupoRiesgo = 0;
    $edad = calculaedad($fecha);
    if($edad >= $_POST["riego"]){
        $grupoRiesgo++;
    }
}

$porcentageGrupoRiesgo = ($grupoRiesgo * 100) / count($_POST["fechas"]);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>El porcentaje de personas en el grupo de riesgo es:</h2>
    <?= $porcentageGrupoRiesgo; ?>
    <h1></h1>
</body>
</html>