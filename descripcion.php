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
    <title>Descripción</title>
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/anuncios.css">
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
    <br>
    <br>
    <br>
    <div class="contendor">
        <div class="uno">
            <span class="icofont-flag"></span>
            <br>
            <small>El Hospital de la selva será el centro de rehabilitación más completo del estado de Chiapas, asegurando la recuperación física de sus pacientes y una atención lo más humana posible.</small>
            <br>
            <div>
                <a href="#">Misión</a>
            </div>
            <br>
        </div>
        <div class="dos">
            <span class="icofont-eye"></span>
            <br>
            <small>Brindar apoyo a los más necesitados así como también atender casos grabes como el actual virus Covid-19 y demás enfermedades a los cuales como personas nos encontramos vulnerables. Implementar cursos a la ciudadanía para que sepan que hacer en momentos de alto riesgo.</small>
            <br>
            <div>
                <a href="#">Visión</a>
            </div>
            <br>
        </div>
        <div class="tres">
            <span class="icofont-badge"></span>
            <br>
            <small>Que la ciudadanía se sienta segura de obtener buenas instalaciones para los casos más extremos y de esta manera crear conciencia que en el estado se producen actividades productivas.</small>
            <br>
            <div>
                <a href="#">Descripción General</a>
            </div>
            <br>
        </div>
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
        <a href="desarolladores.php"><small><b>DESAROLLADORES</b></small></a>
    </center>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/scroll.js"></script>
</body>
</html>