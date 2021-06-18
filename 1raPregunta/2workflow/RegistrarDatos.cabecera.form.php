<?php
    $nombre = "";
    $apellidos = "";
    $ci = "";
    $fechaNac = "";
    $direccion = "";
    $sql = "SELECT * FROM estudiante WHERE Id=".$_SESSION["IdUser"];
    $resCab = mysqli_query($conn, $sql);
    $filCab = mysqli_fetch_array($resCab);
    if(isset($filCab)){
        $nombre = $filCab["nombre"];
        $apellidos = $filCab["apellidos"];
        $ci = $filCab["ci"];
        $fechaNac = $filCab["fecha_nac"];
        $direccion = $filCab["direccion"];
    }
?>