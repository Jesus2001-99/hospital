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
    <title>Medicos</title>
    <link rel="stylesheet" href="../icofont/icofont.min.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/tabla.css">
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
                        <li><a href="registrar_medicos.php">Registrar</a></li>
                        <li><a href="medicos.php">Consultar</a></li>
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
                        <li><a href="../pacientes/registrar_pacientes.php">Registrar</a></li>
                        <li><a href="../pacientes/pacientes.php">Consultar</a></li>
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
        <form action="registrar_medicos.php" method="POST">
            <label class="titulo" for="">REGISTAR MEDICOS</label>
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
                    <label for="">Horario</label><br>
                    <small><input type="time" name="hora" placeholder="Horario" required></small>
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
                    <label for="">Medicocol</label><br>
                    <small><input type="text" name="medi" placeholder="Medicocol" required></small>
                </div>
            </div>
            <div class="cuarto">
                <div class="medi1">
                    <label for="">Medicocol 1</label><br>
                    <small><input type="text" name="medi1" placeholder="Medicocol 1" required></small>
                </div>
                <div class="esp">
                    <label for="">Especialidad</label><br>
                    <small><select name="esp" required>
                        <option value="" disabled selected>Elige una opción</option>
                      <?php 
                        include('../conexion.php');
                        $query="SELECT * FROM especialidad";
                        $resultado=$conexion->query($query);
                        while ($fila=mysqli_fetch_array($resultado)) {
                            echo '<option value="'.$fila["ID_especialidad"].'">'.$fila["Nombre_especialidad"].'</option>';
                        }
                       ?>

                    </select></small>
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
            $hora=$_POST['hora'];
            $fecha=$_POST['fecha'];
            $correo=$_POST['correo'];
            $medi=$_POST['medi'];
            $medi1=$_POST['medi1'];
            $esp=$_POST['esp'];

            $query="INSERT INTO medico (Apellido_medico,Nombre_medico,Telefono_medico,Direccion_medico,Sexo_medico,HorarioTrb_medico,Fecha_nacimiento,Correo_medico,Medicocol,Medicocol1,ID_especialidad) VALUES ('$apellido','$nombre','$tel','$dir','$sexo','$hora','$fecha','$correo','$medi','$medi1','$esp')";
            $validar=$conexion->query($query);
            if ($validar) {
                echo "<script>
                    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                                window.location.href='registrar_medicos.php';
                                }else{
                                window.location.href='medicos.php';
                                }
                 </script>";
            }else{
                echo "<script>
                    alert('El medico no fue registrado');
                    window.location.href='registrar_medicos.php';
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