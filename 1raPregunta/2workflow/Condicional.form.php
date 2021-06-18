    <center>
        <div class="alert alert-success" role="alert" style="width: 40rem;">
            <h4 class="alert-heading">Univ. <?php echo $_SESSION['Nombre'];?></h4>
            <p>A continuación podrás ver si tienes todos los requisitos para proceder con tu inscripción.</p>
            <p class="mb-0">Fecha de Ingreso: <?php echo date("Y-m-d");?></p>
            <hr>
            <div class="card">
                <div class="card-header">
                    ESTADO DE LA VERIFICACIÓN
                </div>
                <div class="card-body">
                    <?php
                        if($_SESSION["Estado"] == 1){
                            echo "-REQUISITOS ACEPTADOS, PUEDE CONTINUAR-";
                        }else{
                    ?>
                    <table class="table table-hover">
                        <caption>Documentos faltantes.</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Documentos</th>	
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                            if($sw1 == 0){
                                echo "<tr><td>Documento de Aprobación</td></tr>";   
                            }
                            if($sw2 == 0){
                                echo "<tr><td>Diploma de Bachiller</td></tr>";   
                            }
                            if($sw3 == 0){
                                echo "<tr><td>Cédula de Identidad</td></tr>";   
                            }
                            if($sw4 == 0){
                                echo "<tr><td>Certificado de Nacimiento</td></tr>";   
                            }        
                        }
                    ?>
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>