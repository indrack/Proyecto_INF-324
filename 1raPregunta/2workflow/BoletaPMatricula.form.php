    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Univ. <?php echo $_SESSION['Nombre'];?></h4>
            <p>Ahora debe subir su boleta de pago realizada al banco de la facultad Universitaria donde se aprecie sus datos y el Nro de Documento/Transaccion.</p>
            <hr>
            <div class="card">
                <div class="card-header">
                    PAGO DE MATRÍCULA
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="FileDocumento" class="form-label">Cargue su Boleta de Pago</label>
                        <?php 
                            if($sw == 0){
                                echo "<input class='form-control btn btn-primary' type='file' id='formDocumento' name='Documento'>";
                            }else{
                                echo "<br>--Boleta de Pago ya fue Cargada--";
                            }
                        ?>                        
                    </div>
                </div>
            </div>
            <p class="mb-0">Acceso el: <?php echo date("Y-m-d");?></p>
        </div>
    </center>