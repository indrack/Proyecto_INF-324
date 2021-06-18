<?php
    $sql = "SELECT * FROM estudiante WHERE Id=".$_SESSION["IdUser"];
    $res = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($res);
    $nombre = $fila["nombre"];
    $apellidos = $fila["apellidos"];
    $ci = $fila["ci"];
    $fechaNac = $fila["fecha_nac"];
    $direccion = $fila["direccion"];
?>