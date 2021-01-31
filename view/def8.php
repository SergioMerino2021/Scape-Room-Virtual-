<!DOCTYPE html>
<html lang="en">

<!--Mensaje al programador: Revisa el código, puede ser vulnerable a Type Juggling!, he dejado en la pagina anterior una ayuda para que sepas de que va la vulnerabilidad-->

<head class="site clearfix">
    <meta charset="utf-8">
    <title>TERMINAL A12</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link href="../css/stylesT.css" rel="stylesheet" type="text/css">
    <link href="../css/stylesGlitch.scss" rel="stylesheet" type="text/scss">
    <link rel="stylesheet" type="text/css" href="../css/stylesGlitch.css">
    <script src="../js/desafio_6.js"></script>
    <script src="../js/pryueba.js"></script>
</head>

<body>
    <div class="row">
        <div class="overlay"></div>

        <div class="col one">
            <img src="../img/Atlas_White_on_Black_Logo.png" alt="Atlas" width="740" height="729" id="logo-v" />
        </div>
        <div class="col two">
            <h4><u>ATLAS Corp <br /> <b>H</b>euristically <b>E</b>ncrypted <b>R</b>eal-Time <b>O</b>perating <b>S</b>ystem (HEROS)</u></h4>
            
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
                    <font color="red"><h1><marquee>Inicia sesión para acabar este scape room</h1></marquee></font>
                    <hr>
                    <h2><i class="fal fa-server"></i> RECURSOS DEL SISTEMA <i class="fal fa-server"></i></h2>
                    <p>- NETWORK</p>
                    <p>- ARCHIVOS SISTEMA</p>
                    <p>- HARDWARE</p>
                    <p>- ARCHIVOS USUARIO</p>
                    <p>- ARCHIVOS I.A</p>
                    <p>- BATERIA</p>
                    <p>- PROTOCOLOS DE SEGURIDAD</p>
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
                <center><form method="POST" name="<?php basename($_SERVER['PHP_SELF']); ?>">
                    <label>Usuario: </label><input type="text" name="usuario" id="usuario" size="30">
                    &nbsp;
                    <label>Password: </label><input type="text" name="password" id="password" size="30">
                    <input type="submit" value="Login">
                </form></center>
            </div>

            <div class="row">
                <?php
                $USER = "admin";
                $PASSWORD = "3st4contraseñ43simposiblede4veriguar123__";

                if(isset($_POST['usuario']) && isset($_POST['password'])){
                    if($_POST['usuario'] == $USER){
                        if(strcmp($_POST['password'], $PASSWORD)== 0){
                            echo "Acceso garantizado, el PIN es 627137160";
                        } else {echo "La password es incorrecta!";}
                    } else {echo "El usuario es incorrecto!";}
                }
            ?>
                <center><form method="POST" name="<?php basename($_SERVER['PHP_SELF']); ?>">
                    <label>Escriba el pin que ha obtenido al loguearse correctamente: </label><input type="text" name="input" id="input" size="30">
                    <input type="submit" value="Insertar">
                </form></center>

            <?php
                error_reporting(0);

                $CODIGO = 627137160;

                if($_POST['input'] == $CODIGO){
                    header('Location: final.html') ;
                } else {echo "Código incorrecto";}
            ?>
            </div>



        </div>
    </div>

</body>

</html>