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
    <br>
    <br>
    <div class="">
        <form action="#" class="form" method="POST">
                    <div class="buscar">
                        <input type="search" name="dato" placeholder="Nombre del enfermero" class="" autocomplete="off">
                            <button name="buscar" type="submit" class="icofont-search-1"></button>
                    </div>          <br><br>
            <div class="tabla">
                <table>
                    <thead>
                        <tr>
                            <th><small>ID</small></th>
                            <th><small>Nombre</small></th>
                            <th><small>Apellido</small></th>
                            <th><small>Teléfono</small></th>
                            <th><small>Dirección</small></th>
                            <th><small>Sexo</small></th>
                            <th><small>Enfermerocol</small></th>
                            <th><small>Fecha de nacimiento</small></th>
                            <th><small>Correo</small></th>
                            <th><small>Usuario</small></th>
                            <th><small>Contraseña</small></th>
                            <th colspan='2'><small>Acciones</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                if (isset($_POST['buscar'])) {
                                    require_once("../conexion.php");
                                    $dato=$_POST['dato'];
                                    $query="SELECT * FROM enfermero WHERE Nombre_enfermero LIKE '$dato%'";
                                    $resultado=$conexion->query($query);
                                    while ($fila=$resultado->fetch_assoc()) {
                                        $id=$fila['ID_Enfermero']; 
                                     ?>
                        <tr class='text-center'>
                            <td><small><?php echo $fila['ID_Enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Nombre_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Apellido_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Telefono_enfemermero']; ?></small></td>
                            <td><small><?php echo $fila['Direccion_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Sexo_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Enfermerocol']; ?></small></td>
                            <td><small><?php echo $fila['FechaNacimiento_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['Correo_enfermero']; ?></small></td>
                            <td><small><?php echo $fila['usuario_enfermero']; ?></small></td>
                            <td><small>*******</small></td>
                            <td><a class="" href="modificar_enfermeros.php?id=<?php echo $fila['ID_Enfermero'] ?>"><span class='icofont-ui-edit'></small></a></td>
                            <td><a class="" href="#" onclick="confirmar(<?php echo $id; ?>)"><span class='icofont-ui-delete'></span></a></td>
                        </tr>
                        <?php
                                }           
                                }
                             ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
<script language="javascript"> 
    function confirmar(id){ 
       var aceptar=confirm("\u00bfDeseas eliminar el registro?"); 
            if (aceptar) 
            {
            window.location="eliminar.php?id="+id;
            }
            else{
                 return false;
            }
    }
    </script>
</body>
</html>