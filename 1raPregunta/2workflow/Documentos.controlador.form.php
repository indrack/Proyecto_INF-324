<?php
    $DB = $_GET["DocumentoDB"];
    $CI = $_GET["DocumentoCI"];
    $CN = $_GET["DocumentoCN"];
    if(!empty($DB)){
        $sql = "UPDATE documentos SET DB=1 WHERE Id=".$_SESSION["IdUser"];
        $res = mysqli_query($conn, $sql);
    }
    if(!empty($CI)){
        $sql = "UPDATE documentos SET CI=1 WHERE Id=".$_SESSION["IdUser"];
        $res = mysqli_query($conn, $sql);
    }
    if(!empty($CN)){
        $sql = "UPDATE documentos SET CN=1 WHERE Id=".$_SESSION["IdUser"];
        $res = mysqli_query($conn, $sql);
    }
?>