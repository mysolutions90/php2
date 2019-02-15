<?php 
include './Template/Template2.php';
?>

 <center>
 <div class="row">
 <div class="large-12 columns"><h2>LISTAR USUARIOS</h2></div>
 
                                                                           <form action="ListarUsuario.php" METHOD="Post">
                                                                            <table width="60%" border="0"  bgcolor="white">


                                                                    
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
                                                                                <OPTION VALUE="4">Todos</OPTION>
                                                                                
                                                                                </SELECT>
                                                                            
                                                                                
                                                                                <td><input type="text" name="busca" id="busqueda" /></td>
                                                                            
                                                                            
                                                                                <td>&nbsp;</td>
                                                                                <td><input name="submit" class="btn btn-box-tool" type="submit" value="Buscar"></td>
                                                                            </tr>
                                                                        </table>
                                                              
                                                                         </form>
 
 
 <table>
     
     
     <tr>
         <td>CODIGO</td>
         <td>NOMBRE</td>
         <td>USUARIO</td>
         <td>PASSWORD</td>
     </tr>
     <?php
     $sql = "select * from usuario";
     $resultado = mysql_query($sql) or die(mysql_error());
     while($res = mysql_fetch_array($resultado)){
     ?>
     <tr>
         <td><?php echo $res['usu_id'];?></td>
         <td><?php echo $res['usu_nombre'];?></td>
         <td><?php echo $res['usu_usuario'];?></td>
         <td><?php echo $res['usu_contrasenia'];?></td>
     </tr>
     <?php          }
     ?>
 </table>

 
 
      </div> 
 </center>