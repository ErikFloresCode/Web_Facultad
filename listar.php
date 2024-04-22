<?php 
    include('BaseDatos.php');

    $bd = new BaseDatos();
    $row = $bd->consulta("select * from investigaciones;");

    foreach($row as $d){
        echo $d['id']." ".$d['titulo']."</br>";
    }

?>