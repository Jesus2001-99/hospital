 <?php
    session_start();
    $id=$_SESSION['ID_Enfermero'];
    $user=$id;
    if ($id == null || $id='') {
        header("location:index.php");
    }
  ?>
<?php 
	require_once ("../conexion.php");
     $id=$_REQUEST['id'];
     $query = "DELETE FROM enfermero WHERE ID_Enfermero=$id ";
              $verificar=$conexion->query($query);
              if ($verificar) {
                echo "<script language='JavaScript'>
				      alert('Registro eliminado...');
				      document.location='enfermeros.php';
				      </script>";
              }else{
                echo "<script language='JavaScript'>
				      alert('ocurrio un error al eliminar el registro...');
				      document.location='enfermeros.php';
				      </script>";
              }
 ?>