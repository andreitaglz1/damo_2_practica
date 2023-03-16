<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'conexion.php';
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $carrera= $_POST["carrera"];
    $año = $_POST["año"];
    $my_query = "insert into estudiante(nombres, apellidos, carrera, año) 
    values('".$nombres."', '".$apellidos."', '".$carrera."', '".$año."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado satisfactoriamente...";
    }else{
        echo "Error al guardar registro...";
    }
}else{
    echo"Error desconocido";
}
?>