<?php
include_once '../user/crud.php';
?>

<?php

session_start();
$usuario = $_SESSION['username'];


if(!isset($usuario)){
    header("location: user_admin.php");
}else{
;

};
?>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/CSS" href="../css/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" href="js/bootstrap.js"></script>
    <title>Registro Usuarios</title>
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

            <li class="nav-item">
                <a class="nav-link" href="paginaprincipal.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registuser.php">Registro Usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../acuerdo-admin/relaciones.php">Relaciones Diplomaticas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../acuerdo-admin/importaciones.php">Importaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../acuerdo-admin/exportaciones.php">Exportaciones</a>
              </li>
                <li>
                    <a href=""><img class="iconos-redes-header" src="https://vanguardiadelpueblo.do/wp-content/uploads/2021/10/facebook-600.png" alt="Facebook"></a>
                    <a href=""><img class="iconos-redes-header" src="https://icones.pro/wp-content/uploads/2021/02/instagram-logo-icone4.png" alt="Instragram"></a>
                    <a href=""><img class="iconos-redes-header" src="https://www.doplerweb.com/data/fotos/1022008841_1_twitter-bird-white-on-blue1.jpg" alt="Twitter"></a>
               </li>
            </ul>
          </div>
        </div>
      </nav>

      <pre>
      </pre>
    <link rel="stylesheet" href="../css/estilos.css">
       <div class="container">
        <div id="cabecera">
        <!--titulo-->
            <center><h1>Editar Usuarios Registrados </h1></center>
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
                            <?php
                            if (isset($_GET['edit'])){
                                ?>
                                <center><button type="submit" name="update">Editar</button></center>
                                <?php
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
            </center>

            <br><br>
            <table width="100%" border="1" cellpadding="15" aling="center">
                <?php
                $res = $MySQLiconn->query("SELECT * FROM user");
                while ($row=$res->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <center><td><a  margi href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('Confirmar edicion')">Editar</a></td></center>
                    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Desea eliminar este usuario')">Eliminar</a></td>

                </tr>
                <?php
                }
                ?>
            </table>
             </center>
            <br></br>

        </div>
        <center>
<?php
        echo "<a href='salir.php'> Cerrar sesion </a> ";
?>
</center>
    </body>
</html>