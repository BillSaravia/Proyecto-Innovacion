<?php
include_once 'crud-user.php';
?>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../css/registro.css">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" href="js/bootstrap.js"></script>
    <title>REGISTRO</title>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand" href="../index.php">
              <img class="Logotipos" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Flag_of_Peru_%28state%29.svg/800px-Flag_of_Peru_%28state%29.svg.png" alt="" width="35" height="35">
          </a>
            <ul class="navbar-nav me-auto ">

                <li>
                    <a href=""><img class="iconos-redes-header" src="https://vanguardiadelpueblo.do/wp-content/uploads/2021/10/facebook-600.png" alt="Facebook"></a>
                    <a href=""><img class="iconos-redes-header" src="https://icones.pro/wp-content/uploads/2021/02/instagram-logo-icone4.png" alt="Instragram"></a>
                    <a href=""><img class="iconos-redes-header" src="https://www.doplerweb.com/data/fotos/1022008841_1_twitter-bird-white-on-blue1.jpg" alt="Twitter"></a>
               </li>
            </ul>
          </div>
        </div>
      </nav>
       <!--Perfil-->
       <pre></pre>

       <div class="container">
        <div id="cabecera">
            <center><h1>📚REGISTRO📚</h1></center>
        </div>
        </div>
        <pre></pre>
		     <!--Inicio-->
			 <center>
        <br>
        <br>
        <div id="form">
            <form method="post">
                <table width="100%" border="1" cellpadding="15">
                    <tr>
                        <td>
                            <input type="text" name=nombre placeholder="Nombre" value="<?php
                            if(isset($_GET['edit'])) echo $getROW ['nombre']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name=apellidos placeholder="Apellidos" value="<?php
                            if(isset($_GET['edit'])) echo $getROW ['apellidos']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name=correo placeholder="Correo" value="<?php
                            if(isset($_GET['edit'])) echo $getROW ['correo']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name=usuario placeholder="Usuario" value="<?php
                            if(isset($_GET['edit'])) echo $getROW ['usuario']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name=clave placeholder="clave" value="<?php
                            if(isset($_GET['edit'])) echo $getROW ['clave']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            if (isset($_GET['edit'])){
                            }else{
                                ?>
                                <center><button type="submit" name="save">Registrar</button></center>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>

            <?php
    echo "<b>Volver a <a href='login.php'> INICIAR SESION </a></b><br>";
    echo "<b>Volver a <a href='../Index.php'> INICIO </a></b>";
?>
            </center>

            <br><br>

        </div>
  
    
          <!-- Optional JavaScript; choose one of the two! -->
      
          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
          <!-- Option 2: Separate Popper and Bootstrap JS -->
          <!--
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
          -->
	</body>
</html>