<?php

//crear funcion de conexion

function Conectarse(){
    if(!($link= mysql_connect("localhost","root",""))){
        
        echo "Error al conectar con el gestor de base de datos";
        exit();
        
    }
    if (!mysql_select_db("php",$link)){
        echo "Error al conectarse con la base de datos";
        
        exit();
        
    }
    return $link;
}

//hacer una resonancia cuando existe un error de conexion tome los valores que estan de la ultima conexion

$link=Conectarse();

?>