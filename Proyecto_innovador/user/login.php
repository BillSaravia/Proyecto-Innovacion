<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/CSS" href="../css/login.css">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <title>Login con sesion</title>
</head>
<body>
    <center>
    <div class="container">
        <div id="cabecera">
            <center><h1>Iniciar sesion</h1></center>
        </div>
        </div>
    <form action="user_usur.php" method="POST">
        <table width="100%" border="1" cellpadding="15">
            <input type="text" name="usuario" placeholder="Digite usuario">
            <br><br>
            <input type="password" name="clave" placeholder="Ingrese Clave">
            <br><br>
            <button type="submit">ENTRAR</button>
        </table>
    </form>
<?php

    echo "<b> No tiene cuenta <a href='registro.php'> Registrese </a> </b> ";
    ?>
    <pre></pre>
<?php
    echo "<b>Volver a <a href='../Index.php'> INICIO </a></b>";
?>
    </center>
</body>
</html>
