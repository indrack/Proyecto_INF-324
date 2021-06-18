<?php
    $documento = $_GET["Documento"];
    if(!empty($documento)){
        $sql = "UPDATE documentos SET PM=1 WHERE Id=".$_SESSION["IdUser"];
        $res = mysqli_query($conn, $sql);
    }
?>