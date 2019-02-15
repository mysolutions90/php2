<?php
include './Template/Template.php';

@session_start();

if (isset($_SESSION['usuario'])){
header('Location: ListarUsuario.php');
}
 
 if (!isset($_SESSION['intentos'])) {
    $_SESSION ['intentos'] = 0;
     # code...
}else{
    $_SESSION['intentos'] ++ ; 
 }
 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body  style="background-color:skyblue">
        <div id="art-main">
            <div class="cleared reset-box"></div>
            <div class="art-box art-sheet">
                <div class="art-box-body art-sheet-body">
                    <div class="art-layout-wrapper">
                        <div class="art-content-layout">
                            <div class="art-content-layout-row">
                                <div class="art-layout-cell art-content">
                                    <div class="art-box art-post">
                                        <div class="art-box-body art-post-body">
                                            <div class="art-post-inner art-article">
                                                <br></br><br></br>
                                                <center>
                                                <div class="art-postcontent">
                                                    
                                                    <!--<p><img src="img/logo.bmp" width="300" height="60" /><div class="titulo"></div></p>-->
                                                    <form action="ingresar4.php" METHOD="Post">
                                                        <table width="20%" border="0"  bgcolor="white">

                                                            <tr>
                                                                <!--<td align="center"><img src="img/logo1.png" width="250" height="75" align="middle"></td>-->
                                                                <td>
                                                                    <fieldset><legend>Ingreso al Sistema</legend>
                                                                        <table width="50%" border="0">
                                                                            <tr>
                                                                                <td>Usuario:</td>
                                                                                <td><input autofocus="autofocus" type="text" name="txtnombre" id="txtnombre" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Contraseña:</td>
                                                                                <td><input type="password" name="txtcontrasenia" id="txtcontrasenia" /></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                                <td><input name="submit" class="btn btn-box-tool" type="submit" value="Ingresar"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </fieldset>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>



                                                </div></center>
                                                <div class="cleared"></div>
                                                <div class="art-postfootericons art-metadata-icons">

                                                </div>
                                            </div>

                                            <div class="cleared"></div>
                                        </div>
                                    </div>
                                    <div class="art-box art-post">
                                    </div>

                                    <div class="cleared"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cleared"></div>
                    <div class="art-footer">
                        <div class="art-footer-body">
                            <div class="art-footer-text">
                                <br><br></br><br></br><br></br><br></br><br></br>
                                
                            </div>
                            <div class="cleared"></div>
                        </div>
                    </div>
                    <div class="cleared"></div>
                </div>
            </div>
            <div class="cleared"></div>
            <p class="art-page-footer"></p>
            <div class="cleared"></div>
        </div>

    </body>
</html>
