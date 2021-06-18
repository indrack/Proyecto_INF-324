<?php
    $sql = "UPDATE documentos SET estado=1 WHERE Id=".$_SESSION["IdUser"];
    $res = mysqli_query($conn, $sql);
    $_SESSION["Estado"] == 1;
?>