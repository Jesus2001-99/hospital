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
            $his=$_POST['his'];
            $fecha=$_POST['fecha'];
            $correo=$_POST['correo'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $curp=$_POST['curp'];
            $query="UPDATE paciente SET Nombre_paciente='$nombre',Apellido_paciente='$apellido',Telefono_paciente='$tel',Direccion_paciente='$dir',Sexo_paciente='$sexo',Historial_paciente='$his',FechaNac_paciente='$fecha',Correo_paciente='$correo',Usuario_paciente='$user',Contraseña_paciente='$pass',CURP_paciente='$curp' WHERE ID_paciente=$id";
            $validar=$conexion->query($query);
            if ($validar) {
                echo "<script>
                    if(confirm('Registro actualizado correctamente')){
                                window.location.href='pacientes.php';
                                }else{
                                window.location.href='pacientes.php';
                                }
                 </script>";
            }else{
                echo "<script>
                    alert('Ocurrio un error al actualizar el registro');
                    window.location.href='pacientes.php';
                </script>";
            }
     ?>