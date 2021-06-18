    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Bienvenido <?php echo $_SESSION['Nombre'];?></h4>
            <p>Adjunta tus últimos documentos para poder continuar con tu inscripción.</p>
            <hr>
            <div class="card">
                <div class="card-header">
                    DOCUMENTOS PERSONALES
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="FileDocumentoDB" class="form-label">Diploma de Bachiller</label>
                        <?php 
                            if($sw1 == 0){
                                echo "<input class='form-control btn btn-primary' type='file' id='FileDocumentoDB' name='DocumentoDB'>";
                            }else{
                                echo "<br>--Diploma de Bachiller cargado--";
                            }
                        ?>                        
                    </div>
                    <div class="mb-3">
                        <label for="FileDocumentoCI" class="form-label">Cédula de Identidad</label>
                        <?php 
                            if($sw2 == 0){
                                echo "<input class='form-control btn btn-primary' type='file' id='FileDocumentoCI' name='DocumentoCI'>";
                            }else{
                                echo "<br>--Cedula de Identidad cargada--";
                            }
                        ?>                        
                    </div>
                    <div class="mb-3">
                        <label for="FileDocumentoCN" class="form-label">Certificado de Nacimiento</label>
                        <?php 
                            if($sw3 == 0){
                                echo "<input class='form-control btn btn-primary' type='file' id='FileDocumentoCN' name='DocumentoCN'>";
                            }else{
                                echo "<br>--certificado de nacimiento cargado--";
                            }
                        ?>                        
                    </div>
                </div>
            </div>
            <p class="mb-0">Acceso el: <?php echo date("Y-m-d");?></p>
        </div>
    </center>