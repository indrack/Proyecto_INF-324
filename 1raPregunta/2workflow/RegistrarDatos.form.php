    <div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Univ. <?php echo $_SESSION['Nombre'];?></h4>
		<p>Registra tus datos personales.</p>
		
		<hr>
		<div class="card">
			<div class="card-header">
				REGISTRO DE DATOS 
			</div>
			<div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputId">Id</label>
                        <input type="text" class="form-control" id="inputId" name="Id" value=<?php echo $_SESSION["IdUser"];?>>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputNombres">Nombres</label>
                        <input type="text" class="form-control" id="inputNombres" placeholder="Ingrese su nombre" name="Nombre" value="<?php echo $nombre;?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputApellidos">Apellidos</label>
                        <input type="text" class="form-control" id="inputApellidos" placeholder="Ingrese su apellido" name="Apellido" value="<?php echo $apellidos;?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputCI">Cédula de Identidad</label>
                        <input type="text" class="form-control" id="inputCI" placeholder="Ingrese su CI" name="CI" value="<?php echo $ci;?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputFechaNac">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="inputFechaNac" name="FechaNac" value="<?php echo $fechaNac;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDireccion">Dirección</label>
                    <input type="text" class="form-control" id="inputDireccion" placeholder="Ingrese su dirección" name="Direccion" value="<?php echo $direccion;?>">
                </div>
			</div>
		</div>
        <p class="mb-0">Acceso el: <?php echo date("Y-m-d");?></p>
	</div>