<?php
 include('_include/configuration.php');
 include('_classes/conectar.php');
 include('_classes/crud.php'); 
 session_start();
 $con = new Coneccion($server,$user,$password,$dbname);
 $con->conectar();
 $crud = new Crud();  
?>
<?php
       
        
  
  $array[0] = "'$_POST[password]'";

$campos="usuario_password";
$tabla= "usuario";

$crud->update("UPDATE usuario SET usuario_password='$_POST[password_nuevo]' WHERE usuario_id='$_POST[usuario_id]'",'Cotraseña guardada exitosamente.',$con->getConection());


  

  $con-> desconectar();
?>
 