<?php
require '../../modelos/Paciente.php';
    try {
        $paciente = new Paciente($_GET);

        $pacientes = $paciente->buscar();
       
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar pacientes</h1>
        <div class="row justify-content-center">
            <form action="/final_caaljuc/controladores/pacientes/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="cliente_id">
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_nombre">Nombre del paciente</label>
                        <input type="text" name="paciente_nombre" id="paciente_nombre" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="paciente_nit">Nit del paciente</label>
                        <input type="text" name="paciente_nit" id="paciente_nit" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>