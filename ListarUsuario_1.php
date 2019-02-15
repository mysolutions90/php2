<?php 
include './Template/Template2.php';
//include './Controladores/conexion.php';
?>

 <center>
 <div class="row">
 <div class="large-12 columns"><h2><font color="">LISTAR USUARIOS</font></h2></div>
 <table>
     <tr>
 <td><input name="" class="btn btn-box-tool" type="submit" value="Nuevo" onclick="location='usuarioRegistro.php'"></td>
 </tr>
 </table>
 
   <form action="ListarUsuario_1.php" METHOD="Post">
          <table width="60%" border="0"  bgcolor="skyblue">
            <tr>
                <td>Buscar por:</td>
                <td>Parametro:</td>
            </tr>

            <tr>
                <td>
                    <SELECT NAME="tipobusqueda"> 
                    <OPTION VALUE="1">Codigo</OPTION>
                    <OPTION VALUE="2">Nombre</OPTION>
                    <OPTION VALUE="3">Usuario</OPTION>
                    <OPTION VALUE="5">Cedula</OPTION>
                    <OPTION VALUE="4">Todos</OPTION>
                    </SELECT>
                                                                           
                <td>
                    <input type="text" name="buscar" id="busqueda" /></td>
                                                                            
                                                                            
                
                <td><input name="submit" class="btn btn-box-tool" type="submit" value="Buscar"></td>
               
            </tr>
          </table>
                                                              
      </form>
 <?php
 $tipo = '';
 @$tipo = $_POST['tipobusqueda'];
 $busca='';
 @$busca = $_POST['buscar'];
 mysql_connect("localhost","root","");
 mysql_select_db("php");
 if($busca!="" && $tipo=="2"){
     $busqueda = mysql_query("select * from usuario where usu_nombre like '%".$busca."%'");
 }
     
 if($busca!="" && $tipo=="1"){
     $busqueda = mysql_query("select * from usuario where usu_id like '%".$busca."%'");
 }
  if($busca!="" && $tipo=="3"){
     $busqueda = mysql_query("select * from usuario where usu_usuario like '%".$busca."%'");
 }
  if($busca=="" && $tipo=="4"){
     $busqueda = mysql_query("select * from usuario");
 }
   if($busca=="" && $tipo==""){
     $busqueda = mysql_query("select * from usuario");
 }
    if($busca!="" && $tipo=="5"){
     $busqueda = mysql_query("select * from usuario where usu_cedula like '%".$busca."%'");
 }

 ?>
 
 <table border="1">
     
     
     <tr>
         <td>CODIGO</td>
         <td>NOMBRE</td>
         <td>APELLIDO</td>
         <td>USUARIO</td>
         <td>PASSWORD</td>
         <td>CEDULA</td>
         <td>ESTADO</td>
     </tr>
     <?php
     //$sql = "select * from usuario";
     //$resultado = mysql_query($sql) or die(mysql_error());
     while($res = mysql_fetch_array($busqueda)){
     ?>
     <tr>
         <td><?php echo $res['usu_id'];?></td>
         <td><?php echo $res['usu_nombre'];?></td>
         <td><?php echo $res['usu_apellido'];?></td>
         <td><?php echo $res['usu_usuario'];?></td>
         <td><?php echo $res['usu_contrasenia'];?></td>
         <td><?php echo $res['usu_cedula'];?></td>
         <td><?php echo $res['usu_estado'];?></td>
         
     </tr>
     <?php          }
     ?>
 </table>

 
 
      </div> 
 </center>