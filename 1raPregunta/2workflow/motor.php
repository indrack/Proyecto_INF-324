<?php
    session_start();
    include "cabecera.php";
    include "cuerpo.php";
    include "conexion.php";
    $flujo = $_GET["flujo"];
    $proceso = $_GET["proceso"];
    $sql = "SELECT * FROM flujo_proceso WHERE flujo='$flujo' AND proceso='$proceso'";
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_array($resultado);
    $formulario = $fila["formulario"];
    $ps = $fila["proceso_siguiente"];
    include $formulario.".cabecera.form.php";
?>
<form method="GET" action="controlador.php" enctype="multipart/form-data">
    <?php
        include $formulario.".form.php";
    ?>
    <br/>
    <input type="hidden" value="<?php echo $flujo; ?>" name="flujo"/>
    <input type="hidden" value="<?php echo $proceso; ?>" name="proceso"/>
    <input type="hidden" value="<?php echo $formulario; ?>" name="formulario"/>
    <center>
        <?php
            if($proceso != 'P1'){
                echo "<input type='submit' value='Anterior' name='Anterior' class='btn btn-success'/>";
            }
            if(($_SESSION["Estado"] == 0 && $proceso == 'P5') || $ps == 'Fin'){
            }else{
                echo "<input type='submit' value='Siguiente' name='Siguiente' class='btn btn-success'/>";
            }
        ?>
        <input type="submit" value="Salir" name="Salir" class="btn btn-danger"/>
    </center>
</form>
<?php
    include "Footer.php";
?>