<?php 
include './Template/Template2.php';
//include './Controladores/conexion.php';
?>

 <center>
 <div class="row">
 <div class="large-12 columns"><h2><font color="gray">LISTAR USUARIOS</font></h2></div>
  <?php
          @$id_u = $_GET['id'];
          
          $consulta_usuario = "Select *from usuario where usu_id = '$id_u'";
          $resusltado_usu = mysql_query($consulta_usuario);
          while ($row_u = mysql_fetch_array($resusltado_usu)){
              
                        $usu_id1 = $row_u['usu_id'];
                        $usu_nombre1 = $row_u['usu_nombre'];
                        $usu_apellido1 = $row_u['usu_apellido'];
                        $usu_cedula1 = $row_u['usu_cedula'];
                        
                        
                        $nick1 = $row_u['usu_usuario'];
                        $estado1 = $row_u['usu_estado'];
                        $cargo = $row_u['rol_codigo'];
                        
              
          }
          
          ?>
   <form action="Controladores/registrarUsuario.php" METHOD="Post">
          <table width="30%" border="0"  bgcolor="">
                <tr>
                  <input type="hidden" name="usu_id" id="usu_id" value="<?php echo @$usu_id1?>">
                      <td>Nombre:</td>
                      <td><input type="text" id="nombre" name="nombre" required=""onkeypress="return soloLetras(event)" value="<?php echo @$usu_nombre1?>" /></td>
                  </tr>
                  <tr>
                      <td>Apellido:</td>
                      <td><input type="text" id="apellido" name="apellido" required=""onkeypress="return soloLetras(event)" value="<?php echo @$usu_apellido1?>"/></td>
                  </tr>
                  <tr>
                      <td>Cedula:</td>
                      <td><input type="text" id="cedula" name="cedula" value="<?php echo @$usu_cedula1?>"required=""onkeypress="return valida(event)"/></td>
                  </tr>
                                   
                  <tr>
                      <td>Nick:</td>
                      <td><input type="text" id="nick" name="nick" required=""value="<?php echo @$nick1?>"/></td>
                  </tr>
                  <tr>
                      <td>Contrasenia:</td>
                      <td><input type="text" id="contra" required=""name="contra" /></td>
                  </tr>
                  <tr>
                      <td>Rol:</td>
                      <td>
                          <select id="rol" name="rol"required="">
                              <option value="1">Administrador</option> 
                              <option value="2">Encargado</option> 
                          </select>
                      </td>
                  </tr>
                  <tr>
                      <td>Estado:</td>
                      <td>
                          <select id="estado" name="estado"required="">
                              <option value="A">Activo</option> 
                              <option value="I">Inactivo</option> 
                          </select>
                      </td>
                  </tr>
                 
                  <br>
                  <tr><td><input type="hidden"></td></tr>
                  <tr>
                     
                                    <td align="center"><br><input class="btn btn-success" type="submit" name="enviar" id="enviar" value="Registrar"/></td>
                                    <td align="center"><br><input class="btn btn-success" type="submit" name="enviar1" id="enviar1" value="Actualizar"/></td>
                                                    
                  </tr>
              </table>
                                                              
      </form>
 

 
 
      </div> 
 </center>

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>