<?php

function Conectarse(){
    if(!($link=mysql_connect("localhost","root",""))){
        echo "Error  conectando a la base de datos ";exit();
    }
    if(!mysql_select_db("informatica",$link)){
        echo "Error seleccionando la base de datos ";exit();
    }
    return $link;
}
$link =Conectarse();
echo "Conexion con la base de datos conseguida <br>";
mysql_close($link);
?>