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
    <title>Contactanos</title>
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/targetas.css">
</head>
<body>
    <header id="menu" class="">
      <div class="logo">
          <a href="inicio.php"><img width="70" src="img/logo.png" alt=""></a>
          <h4><marquee behavior="" direction="">HOSPITAL</marquee></h4>
      </div>
       <input type="checkbox" id="btn-menu">
       <label for="btn-menu" class="icofont-navigation-menu"></label>
        <nav class="menu">
            <ul>
                <li class="submenu"><a href="#">Medicos<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="medicos/registrar_medicos.php">Registrar</a></li>
                        <li><a href="medicos/medicos.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Enfermeros<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="enfermeros/registrar_enfermeros.php">Registrar</a></li>
                        <li><a href="enfermeros/enfermeros.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Pacientes<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="pacientes/registrar_pacientes.php">Registrar</a></li>
                        <li><a href="pacientes/pacientes.php">Consultar</a></li>
                    </ul>
                </li>
                <li class="submenu"><a href="#">Nuestra empresa<span class="icofont-rounded-down"></span></a>
                    <ul>
                        <li><a href="descripcion.php">Descripción</a></li>
                        <li><a href="contactanos.php">Contactanos</a></li>
                    </ul>
                </li>
                <li><a href="inicio.php"><span class="icofont-ui-home icono"></span></a></li>
                <li><a href="cerrar_sesion.php" title="Cerrar seseón"><span class="icofont-lock icono"></span></a></li>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="contendor">
        <div class="uno">
            <div class="js">
                <img src="img/1.jpeg" alt="">
             <small>Mario Urbano López Molina</small><br><br>
            <small>Programador</small><br>
            <small>Base de datos</small><br><br>
            <ul>
                <li><a href="#"><span class="icofont-facebook"></span></a></li>
                <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                <li><a href="#"><span class="icofont-instagram"></span></a></li>
            </ul>
            </div>
            <br><br>
        </div>
        <div class="dos">
            <div class="js">
                <img src="img/2.jpeg" alt="">
             <small>Luis Antonio López Lara</small><br><br>
            <small>Programador</small><br>
            <small>Base de datos</small><br><br>
            <ul>
                <li><a href="#"><span class="icofont-facebook"></span></a></li>
                <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                <li><a href="#"><span class="icofont-instagram"></span></a></li>
            </ul>
            </div>
            <br><br>
        </div>
        <div class="tres">
            <div class="js">
                <img src="img/3.jpeg" alt="">
             <small>Mauricio Ignacio López Cruz</small><br><br>
            <small>Programador</small><br>
            <small>Base de datos</small><br><br>
            <ul>
                <li><a href="#"><span class="icofont-facebook"></span></a></li>
                <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                <li><a href="#"><span class="icofont-instagram"></span></a></li>
            </ul>
            </div>
            <br><br>
        </div>
        <div class="cuatro">
            <div class="js">
                <img src="img/4.jpeg" alt="">
             <small>Luis Orlando Najéra García</small><br><br>
            <small>Programador</small><br>
            <small>Base de datos</small><br><br>
            <ul>
                <li><a href="#"><span class="icofont-facebook"></span></a></li>
                <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                <li><a href="#"><span class="icofont-instagram"></span></a></li>
            </ul>
            </div>
            <br><br>
        </div>
        <div class="cinco">
            <div class="js">
                <img src="img/5.jpeg" alt="">
             <small>Pedro Girón López</small><br><br>
            <small>Programador</small><br>
            <small>Base de datos</small><br><br>
            <ul>
                <li><a href="#"><span class="icofont-facebook"></span></a></li>
                <li><a href="#"><span class="icofont-whatsapp"></span></a></li>
                <li><a href="#"><span class="icofont-instagram"></span></a></li>
            </ul>
            </div>
            <br><br>
        </div>
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
        <a href="desarolladores.php"><small><b>DESAROLLADORES</b></small></a>
    </center>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/scroll.js"></script>
</body>
</html>