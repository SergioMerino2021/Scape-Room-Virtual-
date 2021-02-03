<!DOCTYPE html>
<html lang="en">
<!--Programador, recuerda asignar bien los privilegios al archivo de linux dónde se ven las password!-->
<head class="site clearfix">
    <meta charset="utf-8">
    <title>TERMINAL A12</title>
    <link href="../css/stylesT.css" rel="stylesheet" type="text/css">
    <link href="../css/stylesGlitch.scss" rel="stylesheet" type="text/scss">
    <link rel="stylesheet" type="text/css" href="../css/stylesGlitch.css">
    <script src="../js/pryueba.js"></script>
    <link rel="icon" type="image/png" href="../img/logo.png">
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
                    <h2><i class="fal fa-server"></i> RECURSOS DEL SISTEMA <i class="fal fa-server"></i></h2>
                    <p>- NETWORK</p>
                    <p class="yellow">- ARCHIVOS SISTEMA</p>
                    <p class="yellow">- HARDWARE</p>
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
                <h1>Archivo importante</h1>

                <p><a href="archivo.php?file=archivo.txt">
                <img src="../img/Ba.png" alt="File" width="400" height="332">
                </a></p>   
                &nbsp;
                 <center><form method="POST" name="<?php basename($_SERVER['PHP_SELF']); ?>">
                    <label>Usuario: </label><input type="text" name="user" id="user" size="30">
                    &nbsp;
                    <label>Pass: </label><input type="text" name="pass" id="pass" size="30">
                    &nbsp;
                    <input type="submit" value="Insertar">
                </form></center>

            </div>

            <div class="row">
                <?php
                    $CODIGO = "sergio2001";
                    $USER = "Sergio";

                    if(isset($_POST['user']) && isset($_POST['pass'])){
                        if($_POST['user'] == $USER){
                            if($_POST['pass'] == $CODIGO){
                                header('Location: def3.html');
                            } else {echo "La password es incorrecta!";}
                        } else {echo "El usuario es incorrecto!";}
                    }
                ?>
            </div>



        </div>
    </div>

</body>

</html>