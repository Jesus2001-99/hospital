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
            <span class="icofont-ui-call"></span>
            <br>
            <small><b>9191936817</b></small>
            <small>Llamanos y agenda tu cita.</small>
            <br>
            <div>
                <a href="https://web.whatsapp.com/">Teléfono</a>
            </div>
            <br>
        </div>
        <div class="dos">
            <span class="icofont-ui-map"></span>
            <br>
            <small>Carretera Ocosingo-Altamirano; E.C. a, Montelibano, Chis.</small>
            <br>
            <div>
                <a href="https://www.google.com/maps/uv?pb=!1s0x85f2c20168f99751:0x37e04f54c3990c3!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipN7F0NfQrA7a97zmzJ_4lMmIz5VYoK0gcBTaw4h%3Dw258-h160-k-no!5shospital+20+camas+ocosingo+-+Buscar+con+Google!15zQ2dJZ0FRPT0&imagekey=!1e10!2sAF1QipN7F0NfQrA7a97zmzJ_4lMmIz5VYoK0gcBTaw4h&hl=es-419&sa=X&ved=2ahUKEwjBlfDOqbzrAhVMcq0KHRzhBtQQoiowCnoECBYQBg">Ubicación</a>
            </div>
            <br>
        </div>
        <div class="tres">
            <span class="icofont-facebook"></span>
            <br>
            <small>@hospital_JS</small>
            <br>
            <div>
                <a href="https://www.facebook.com/">Facebook</a>
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