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
<form action="mostrarResultado.php" method="post">
    <h2>Edad de riego</h2>
    <input type="number" name="riego" min="0" max="105">
    <?php
    for ($i = 0; $i < $_POST["numeroPersonas"]; $i++){
        echo '<input type="date" name="fechas[]">';
        echo "<br>";
    }
    ?>
    <input type="submit">
</form>
</body>
</html>