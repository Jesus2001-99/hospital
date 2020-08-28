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
    <title>Enfermeros</title>
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
                        <li><a href="registrar_enfermeros.php">Registrar</a></li>
                        <li><a href="enfermeros.php">Consultar</a></li>
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
        <?php 
                    $id=$_REQUEST['id'];
                    require_once("../conexion.php");
                    $query="SELECT * FROM enfermero WHERE ID_Enfermero=$id";
                    $resultado=$conexion->query($query);
                    $fila=$resultado->fetch_assoc();
                 ?>
        <form action="validar.php?id=<?php echo $id; ?>" method="POST">
            <label class="titulo" for="">MODIFICAR ENFERMEROS</label>
            <br>
            <div class="primero">
                <div class="nom">
                    <label for="">Nombre</label><br>
                    <small><input type="text" name="nombre" placeholder="Nombre" required value="<?php echo $fila['Nombre_enfermero']; ?>"></small>
                </div>
                <div class="ape">
                   <label for="">Apellidos</label><br>
                    <small><input type="text" name="apellido" placeholder="Apellido" required value="<?php echo $fila['Apellido_enfermero']; ?>"></small>
                </div>
                <div class="sex">
                    <label for="">Sexo</label><br>
                    <small><select name="sexo" id="" required>
                            <option value="<?php echo $fila['Sexo_enfermero']; ?>"><?php echo $fila['Sexo_enfermero']; ?></option>
                        <?php 
                            $sexo=$fila['Sexo_enfermero'];
                            if ($sexo=="Masculino") {
                                echo '<option value="Femenino">Femenino</option>';
                            }elseif ($sexo="Femenino") {
                                echo '<option value="Masculino">Masculino</option>';
                            }
                         ?>
                        </select></small>
                </div>
            </div>
            <br>
            <div class="segundo">
                <div class="tel">
                    <label for="">Teléfono</label><br>
                    <small><input type="text" name="tel" placeholder="Teléfono" required value="<?php echo $fila['Telefono_enfemermero']; ?>"></small>
                </div>
                <div class="dir">
                    <label for="">Dirección</label><br>
                    <small><input type="text" name="dir" placeholder="Dirección" required value="<?php echo $fila['Direccion_enfermero']; ?>"></small>
                </div>
                <div class="hora">
                    <label for="">Enfermerocol</label><br>
                    <small><input type="text" name="enfer" placeholder="Enfermerocol" required value="<?php echo $fila['Enfermerocol']; ?>"></small>
                </div>
            </div>
            <div class="tercero">
                <div class="fech">
                    <label for="">Fecha de nacimiento</label><br>
                    <small><input type="date" name="fecha" placeholder="Fecha nacimiento" required value="<?php echo $fila['FechaNacimiento_enfermero']; ?>"></small>
                </div>
                <div class="cor">
                    <label for="">Correo</label><br>
                    <small><input type="email" name="correo" placeholder="Correo" required value="<?php echo $fila['Correo_enfermero']; ?>"></small>
                </div>
                <div class="medi">
                    <label for="">Usuario</label><br>
                    <small><input type="text" name="user" placeholder="Usuario" required value="<?php echo $fila['usuario_enfermero']; ?>"></small>
                </div>
            </div>
            <div class="cuarto">
                <div class="medi1">
                    <label for="">Contraseña</label><br>
                    <small><input type="password" name="pass" placeholder="Contraseña" required value="<?php echo $fila['contrasena_enfermero']; ?>"></small>
                </div>
            </div>           
            <button type="submit" name="registrar">ACTUALIZAR</button>
            <br>
            <br>
        </form>
    </div>
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