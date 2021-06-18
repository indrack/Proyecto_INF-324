<?php
    session_start();
	include "conexion.php";
	$sql = "SELECT * FROM flujo_proceso WHERE proceso='P1' AND codrol='".$_SESSION["Rol"]."'";
	$resultado = mysqli_query($conn, $sql);
    include "cabecera.php";
    include "cuerpo.php";
?>
<center>
    <div class="card border-primary mb-3 alert alert-warning" style="max-width: 18rem;">
        <div class="card-header">Nuevo Flujo</div>
            <div class="card-body text-primary">
                <div class="alert alert-success" role="alert">
                <form action="controlflujo.php" method="GET" class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="FLujos" class="sr-only">Flujos:</label>
                            <select name="flujo_seleccionado" class="custom-select mr-sm-2">
                                <option selected>Seleccione un flujo</option>
                                <?php
                                    while($fila = mysqli_fetch_array($resultado)){
                                        echo "<option value=".$fila["flujo"].">".$fila["flujo"]."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <input class="btn btn-primary mb-2" type="submit" name="Comenzar" value="Comenzar"/>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</center>
<?php
    include "Footer.php";
?>