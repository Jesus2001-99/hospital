 <?php
    session_start();
    $id=$_SESSION['ID_Enfermero'];
    $user=$id;
    if ($id == null || $id='') {
        header("location:index.php");
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="../icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/formulario.css">
</head>
<body>
<header id="menu" class="">
      <div class="logo">
          <a href="../inicio.php"><img width="70" src="../img/logo.png" alt=""></a>
          <h4><marquee behavior="" direction="">HOSPITAL</marquee></h4>
      </div>
       <input type="checkbox" id="btn-menu">
       <label for="btn-menu" class="icofont-navigation-menu"></label>
        <nav class="menu">
            <ul>
                <li class="submenu"><a href="#">Medicos<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="../medicos/registrar_medicos.php">Registrar</a></li>
                        <li><a href="../medicos/medicos.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Enfermeros<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="../enfermeros/registrar_enfermeros.php">Registrar</a></li>
                        <li><a href="../enfermeros/enfermeros.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Pacientes<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="registrar_pacientes.php">Registrar</a></li>
                        <li><a href="pacientes.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Nuestra empresa<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="../descripcion.php">Descripción</a></li>
                        <li><a href="../contactanos.php">Contactanos</a></li>
                    </ul>
                </li>
                <li><a href="../inicio.php"><span class="icofont-ui-home icono"></span></a></li>
                <li><a href="../cerrar_sesion.php" title="Cerrar sesión"><span class="icofont-lock icono"></span></a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div class="formulario">
        <form action="registrar_pacientes.php" method="POST">
            <label class="titulo" for="">REGISTAR PACIENTES</label>
            <br>
            <div class="primero">
                <div class="nom">
                    <label for="">Nombre</label><br>
                    <small><input type="text" name="nombre" placeholder="Nombre" required></small>
                </div>
                <div class="ape">
                   <label for="">Apellidos</label><br>
                    <small><input type="text" name="apellido" placeholder="Apellido" required></small>
                </div>
                <div class="sex">
                    <label for="">Sexo</label><br>
                    <small><select name="sexo" id="" required>
                            <option value="" disabled selected>Sexo</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select></small>
                </div>
            </div>
            <br>
            <div class="segundo">
                <div class="tel">
                    <label for="">Teléfono</label><br>
                    <small><input type="text" name="tel" placeholder="Teléfono" required></small>
                </div>
                <div class="dir">
                    <label for="">Dirección</label><br>
                    <small><input type="text" name="dir" placeholder="Dirección" required></small>
                </div>
                <div class="hora">
                    <label for="">Historial</label><br>
                    <small><input type="text" name="his" placeholder="Historial" required></small>
                </div>
            </div>
            <div class="tercero">
                <div class="fech">
                    <label for="">Fecha de nacimiento</label><br>
                    <small><input type="date" name="fecha" placeholder="Fecha nacimiento" required></small>
                </div>
                <div class="cor">
                    <label for="">Correo</label><br>
                    <small><input type="email" name="correo" placeholder="Correo" required></small>
                </div>
                <div class="medi">
                    <label for="">Usuario</label><br>
                    <small><input type="text" name="user" placeholder="Usuario" required></small>
                </div>
            </div>
            <div class="cuarto">
                <div class="medi1">
                    <label for="">Contraseña</label><br>
                    <small><input type="password" name="pass" placeholder="Contraseña" required></small>
                </div>
                <div class="esp">
                    <label for="">Curp</label><br>
                    <small><input type="text" name="curp" placeholder="Curp" required></small>
                </div>
            </div>           
            <button name="registrar">REGISTRAR</button>
            <br>
            <br>
        </form>
    </div>
    <?php 
        if (isset($_POST['registrar'])) {
            require_once("../conexion.php");
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $sexo=$_POST['sexo'];
            $tel=$_POST['tel'];
            $dir=$_POST['dir'];
            $his=$_POST['his'];
            $fecha=$_POST['fecha'];
            $correo=$_POST['correo'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $curp=$_POST['curp'];

            $query="INSERT INTO paciente (CURP_paciente,Nombre_paciente,Apellido_paciente,Direccion_paciente,Telefono_paciente,Correo_paciente,Sexo_paciente,FechaNac_paciente,Historial_paciente,Usuario_paciente,Contraseña_paciente) VALUES ('$curp','$nombre','$apellido','$dir','$tel','$correo','$sexo','$fecha','$his','$user','$pass')";
            $validar=$conexion->query($query);
            if ($validar) {
                echo "<script>
                    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                                window.location.href='registrar_pacientes.php';
                                }else{
                                window.location.href='pacientes.php';
                                }
                 </script>";
            }else{
                echo "<script>
                    alert('El paciente no fue registrado');
                    window.location.href='registrar_pacientes.php';
                </script>";
            }
        }
     ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<footer>
   <div>
        <ul>
            <li><a href=""><span class="icofont-facebook"></span></a></li>
            <li><a href=""><span class="icofont-whatsapp"></span></a></li>
            <li><a href=""><span class="icofont-instagram"></span></a></li>
        </ul>
    </div>
    <center>
        Desarollado por los alumnos de la UTSelva
        <br>
        <small>Infraestructura de redes digitales</small>
        <br>
        <br>
        <a href="../desarolladores.php"><small><b>DESAROLLADORES</b></small></a>
    </center>
</footer>
<script src="../js/jquery.min.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/scroll.js"></script>
</body>
</html>