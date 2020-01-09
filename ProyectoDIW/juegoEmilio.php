<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("includes/contenidoHead.php");
    ?>
</head>
<body onload="game.init()">
 
    <!--MENU DE NAVEGACION-->
    <?php 
    include "includes/menuNav.php"; 
    ?>

    <!--JUEGO-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-warning font-weight-bold">Thorcalipsis</h1>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <canvas id="canvas" width="899" height="560">TU NAVEGADOR NO SOPORTA HTML5!</canvas>
            </div>
        </div>
    </div>

    <!--Scripts-->
    <script src="js/juegoEmilio/Jugador.js"></script>
    <script src="js/juegoEmilio/Escudo.js"></script>
    <script src="js/juegoEmilio/superbattle.js" type="text/javascript"></script>

    <!--Footer-->
    <?php include "includes/footer.php"; ?>
</body>

</html>

