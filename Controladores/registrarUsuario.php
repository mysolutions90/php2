<?php

if(isset($_POST['enviar']) && $_POST['enviar'] == 'Registrar'){
    
    include '../Controladores/conexion.php';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
//    $cel = $_POST['cel'];
//    $mail = $_POST['mail'];
    $nick = $_POST['nick'];
    $contra = $_POST['contra'];
    $rol = $_POST['rol'];
    $estado = $_POST['estado'];

    $contraseña = md5($contra);
//    $foto=$_FILES["foto"]["name"];
//    $ruta=$_FILES["foto"]["tmp_name"];
//    $destino="".$foto;
//    copy($ruta,$destino);
    
    $insertar_usuario = "insert into usuario(usu_nombre, usu_apellido, usu_cedula, usu_usuario, usu_contrasenia, usu_estado, rol_codigo)
        value('$nombre','$apellido','$cedula','$nick','$contra','$estado','$rol')";
    $res = mysql_query($insertar_usuario) or die(mysql_error());
    
}

//if(isset($_POST['enviar1']) && $_POST['enviar1'] == 'Actualizar'){
//    
//    include '../conexion.php';
//    $usu_id = $_POST['usu_id'];
//    $nombre1 = $_POST['nombre'];
//    $apellido1 = $_POST['apellido'];
//    $cedula1 = $_POST['cedula'];
//    $cel1 = $_POST['cel'];
//    $mail1 = $_POST['mail'];
//    $nick1 = $_POST['nick'];
//    $contra1 = $_POST['contra'];
//    $cargo1 = $_POST['cargo'];
//    
//    $contraseña1 = md5($contra1);
//    $foto1=$_FILES["foto"]["name"];
//    $ruta1=$_FILES["foto"]["tmp_name"];
//    $destino1="img/".$foto1;
//    copy($ruta1,$destino1);
//    
//    
//    $update_usuario = "update usuarios set usu_nombre = '$nombre1', usu_apellido = '$apellido1', usu_cedula = '$cedula1', usu_celular = '$cel1', usu_email = '$mail1', nick = '$nick1', password = '$contraseña1', estado = 'activo', car_id = '$cargo1', cargo = 'na', d_foto = '$destino1' where usu_id = '$usu_id' limit 1";
//    $res = mysql_query($update_usuario) or die(mysql_error());
//    
//}

if($res){
    echo "<script type=\"text/javascript\">alert('Registro Guardado con exito');location.href='../ListarUsuario_1.php';</script>";
    
}else{
    
    echo "<script>alert('Error al Grabar');history.go(-1);</script>";
}


?>