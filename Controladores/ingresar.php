<?php

include '../conexion.php';
//trim borra los espacios en blanco antes o despues del caracter
if(trim($_POST['txtnombre'])!="" && ($_POST ['txtcontrasenia'])!=""){
    $usuario=$_POST['txtnombre'];
    $password=$_POST['txtcontrasenia'];
    $pass= md5($password);
    
    
    $resultado=mysql_query ("select * from usuario where usu_usuario='$usuario' and usu_contrasenia='$password'");
    //para hacer roles de usuario
    if($Row=mysql_fetch_array($resultado)){
        $perfil=$Row['rol_codigo'];
        switch($perfil){
            case 1: 
            echo "<script type=\"text/javascript\"> alert('Bienvenido Administrador');</script>";
                break;
                
            case 2:
            echo "<script type=\"text/javascript\"> alert('Bienvenido Usuario');</script>";
                break;
            
        }
     ?>
<SCRIPT LANGUAGE="javascript" type="text/javascript"></SCRIPT>

<?php
}else{
    
       
   ?>

   <SCRIPT LANGUAGE="javascript" type="text/javascript">alert("Usuario no existente en la base de datos o password incorrecto");
      location.href = "../index.php";
   </SCRIPT>
   <?php 

}
mysql_free_result($resultado);
}
else
{
   ?>
   <SCRIPT LANGUAGE="javascript" type="text/javascript">alert("Debe especificar un nick y password");
      location.href = "../index.php";
   </SCRIPT>

   <?php
}
mysql_close();
?>

