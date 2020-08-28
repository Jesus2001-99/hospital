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
            $enfer=$_POST['enfer'];
            $fecha=$_POST['fecha'];
            $correo=$_POST['correo'];
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $query="UPDATE enfermero SET Nombre_enfermero='$nombre',Apellido_enfermero='$apellido',Telefono_enfemermero='$tel',Direccion_enfermero='$dir',Sexo_enfermero='$sexo',Enfermerocol='$enfer',FechaNacimiento_enfermero='$fecha',Correo_enfermero='$correo',usuario_enfermero='$user',contrasena_enfermero='$pass' WHERE ID_Enfermero=$id";
            $validar=$conexion->query($query);
            if ($validar) {
                echo "<script>
                    if(confirm('Registro actualizado correctamente')){
                                window.location.href='enfermeros.php';
                                }else{
                                window.location.href='enfermeros.php';
                                }
                 </script>";
            }else{
                echo "<script>
                    alert('Ocurrio un error al actualizar el registro');
                    window.location.href='enfermeros.php';
                </script>";
            }
     ?>