    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>Para poder continuar con tu proceso de inscripción debes subir el siguiente archivo.</p>
            <hr>
            <div class="card">
                <div class="card-header">
                    DOCUMENTO DE APROBACIÓN
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="FileDocumento" class="form-label">Cargue su documento de aprobación</label>
                        <?php 
                            if($sw == 0){
                                echo "<input class='form-control btn btn-primary' type='file' id='formDocumento' name='Documento'>";
                            }else{
                                echo "<br>--El Doc de Aprobacion ya fue cargado--";
                            }
                        ?>                        
                    </div>
                </div>
            </div>
            <p class="mb-0">Acceso el: <?php echo date("Y-m-d");?></p>
        </div>
    </center>
