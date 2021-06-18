<?php
	session_start();
	include "conexion.php";
	$sql = "SELECT * FROM seguimiento WHERE fecha_fin IS NULL AND Id=".$_SESSION["IdUser"];
	$resultado = mysqli_query($conn, $sql);
	include "cabecera.php";
	include "cuerpo.php";
?>
	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Univ. <?php echo $_SESSION['Nombre'];?></h4>
		<p>Procesos en Curso.</p>		
		<hr>
		<div class="card text-center">
			<div class="card-header">
				BANDEJA DE PROCESOS
			</div>
			<div class="card-body">
				<table class="table table-hover">
					<caption>Lista de procesos inconclusos.</caption>
					<thead class="table-dark">
						<tr>
							<th scope="col">Flujo</th>
							<th scope="col">Proceso</th>
							<th scope="col">Acción</th>	
						</tr>
					</thead>
					<tbody>
<?php
	while ($fila = mysqli_fetch_array($resultado)){
		echo "<tr>";
		echo "<td>".$fila["flujo"]."</td>";
		echo "<td>".$fila["proceso"]."</td>";
		echo "<td><a class='btn btn-success' role='button' href='motor.php?flujo=".$fila["flujo"]."&proceso=".$fila["proceso"]."'>Continuar</a></td>";
		echo "</tr>";
	}
?>
					</tbody>
				</table>
			</div>
		</div>
		<p class="mb-0">Acceso el: <?php echo date("Y-m-d");?></p>
	</div>
	<center>
		<form method = "GET" action="controlador.php">
			<a class="btn btn-primary" role="button" href="nuevoflujo.php">Nuevo</a>
			<input type="submit" value="Salir" name="Salir" class="btn btn-primary"/>
		</form>
	</center>
	
	
<?php
	include "Footer.php";
?>