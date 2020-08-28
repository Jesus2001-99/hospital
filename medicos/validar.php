 <?php
    session_start();
    $id=$_SESSION['ID_Enfermero'];
    $user=$id;
    if ($id == null || $id='') {
        header("location:index.php");
    }
  ?>
<?php 
            require_once("../conexion.php");
            $id=$_REQUEST['id'];
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

            $query="UPDATE medico SET Apellido_medico='$apellido',Nombre_medico='$nombre',Telefono_medico='$tel',Direccion_medico='$dir',Sexo_medico='$sexo',HorarioTrb_medico='$hora',Fecha_nacimiento='$fecha',Correo_medico='$correo',Medicocol='$medi',Medicocol1='$medi1',ID_especialidad=$esp WHERE idMedico=$id";
            $validar=$conexion->query($query);
            if ($validar) {
                echo "<script>
                    if(confirm('Registro actualizado correctamente')){
                                window.location.href='medicos.php';
                                }else{
                                window.location.href='medicos.php';
                                }
                 </script>";
            }else{
                echo "<script>
                    alert('Ocurrio un error al actualizar el registro');
                    window.location.href='medicos.php';
                </script>";
            }
     ?>