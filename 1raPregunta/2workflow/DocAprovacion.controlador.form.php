<?php
    $documento = $_GET["Documento"];
    if(!empty($documento)){
        $sql = "INSERT INTO documentos(Id, DA, DB, CI, CN, estado) VALUES (".$_SESSION["IdUser"].", 1, 0, 0, 0, 0)";
        $res = mysqli_query($conn, $sql);
    }
?>