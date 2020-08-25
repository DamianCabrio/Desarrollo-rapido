<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>¿Estoy en Peligro?</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">ESTOY EN PELIGRO?</a>
        <ul class="right hide-on-med-and-down">
        </ul>

        <ul id="nav-mobile" class="sidenav">
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">¿ESTOY EN PELIGRO?</h1>
            <form action="mostrarResultado.php" method="post">
                <h2>Edad de riego</h2>
                <h4>Si se supera la edad ingresada se estara en el grupo de riesgo</h4>
                <input type="number" name="riego" min="0" max="105">
                <?php
                for ($i = 0; $i < $_POST["numeroPersonas"]; $i++){
                    echo '<input type="date" name="fechas[]">';
                    echo "<br>";
                }
                ?>
                <input type="submit">
        </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

    </div>
</div>





<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
