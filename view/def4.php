<!DOCTYPE html>
<html lang="en">

<header class="site clearfix">
    <title>TERMINAL A12</title>
    <link href="../css/stylesT.css" rel="stylesheet" type="text/css">
    <link href="../css/stylesGlitch.scss" rel="stylesheet" type="text/scss">
    <link rel="stylesheet" type="text/css" href="../css/stylesGlitch.css">
    <script src="../js/desafio_6.js"></script>
    <script src="../js/pryueba.js"></script>
    <link rel="icon" type="image/png" href="../img/logo.png">
</header>

<body>
    <div class="row">
        <div class="overlay"></div>

        <div class="col one">
            <img src="../img/Atlas_White_on_Black_Logo.png" alt="Atlas" width="740" height="729" id="logo-v" />
        </div>
        <div class="col two">
            <h4>ATLAS Corp <br /> <b>H</b>euristically <b>E</b>ncrypted <b>R</b>eal-Time <b>O</b>perating <b>S</b>ystem (HEROS)</h4>
            <p>----------------------------------------------------------</p>
            <p>HEROS v 1.1.2</p>
            <p>(c)2001-2002 ATLAS Corp</p>
            <p>- Server APACHE -</p>
        </div>
    </div>


    <div class="wrapper">
        <div class="content clearfix">

            <p class="clear"><br /></p>

            <div class="row">
                <div class="aligCenter">
                    <h2><i class="fal fa-server"></i> RECURSOS DEL SISTEMA <i class="fal fa-server"></i></h2>
                    <p>- NETWORK</p>
                    <p>- ARCHIVOS SISTEMA</p>
                    <p>- HARDWARE</p>
                    <p class="orange">- ARCHIVOS USUARIO</p>
                    <p class="orange">- ARCHIVOS I.A</p>
                    <p class="yellow">- BATERIA</p>
                    <p class="red">- PROTOCOLOS DE SEGURIDAD</p>
                    <p class="orange">- SERVIDOR FTP</p>
                </div>
            </div>

            <br />
            <br />

            <div class="row">
                <h1 data-text="ERROR DETECTADO" class="red animation_text"><i class="fal fa-exclamation-triangle"></i>ERROR DETECTADO<i class="fal fa-exclamation-triangle"></i></h1><br />

                <div class="yellow">
                    <h2> <i class="fas fa-microchip"></i> SISTEMA COMPROMETIDO <i class="fas fa-microchip"></i></h2><br />
                    <p>RESTAURACIÓN MANUAL NECESARIA</p><br />
                </div>


            </div>
            <div class="row">
                <h1>Hey, Dummy 2+2 = 4</h1>
                <!--Cookie-base64 = SGV5LCBEdW1teSAyKzIgPSA0   !-->

                <h4>Ingresa la cookie de inicio de seión para entrar a la web con el usuario por defecto de una web en linux</h4>

                <center><form method="POST" name="<?php basename($_SERVER['PHP_SELF']); ?>">
                    <label>Usuario: </label><input type="text" name="user" id="user" size="30">
                    &nbsp;
                    <label>Cookie: </label><input type="text" name="cookie" id="cookie" size="30">
                    &nbsp;
                    <input type="submit" value="Insertar">
                </form></center>
            </div>

            <div class="row">
                <?php
                    $USER = "www-data";
                    $COOKIE = "SGV5LCB3d3ctZGF0YSAyKzIgPSA0";

                    if(isset($_POST['user']) && isset($_POST['cookie'])){
                        if($_POST['user'] == $USER){
                            if($_POST['cookie'] == $COOKIE){
                                header('Location: def5.html');
                            } else {echo "La cookie de sesión es incorrecta!";}
                        } else {echo "El usuario es incorrecto!";}
                    }
                ?>
            </div>



        </div>
    </div>

</body>

</html>