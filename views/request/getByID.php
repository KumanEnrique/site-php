<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$form_update = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">
                update a request
            </div>
            <div class="card-body">
                <form action="%srequest/update" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" disabled value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="folio">Folio</label>
                        <input type="text" name="folio" id="folio" class="form-control" autofocus value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="state">State</label>
                        <input type="text" name="state" id="state" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="departament">Departament</label>
                        <input type="text" name="departament" id="departament" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="employee">Employee</label>
                        <input type="text" name="employee" id="employee" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="begin_date">Begin Date</label>
                        <input type="date" name="begin_date" id="begin_date" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="end_date">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" value="%s">
                    </div>
                    <button class="btn btn-success" type="submit">update</button>
                </form>
            </div>
            <div class="card-footer">
                %s
            </div>
        </div>
    </div>
</div>
';
printf($form_update,constant('URL_HOME'),$this->data['id'],$this->data['folio'],$this->data['estado'],$this->data['descripcion'],$this->data['departamento'],$this->data['trabajador'],$this->data['fecha_i'],$this->data['fecha_fin'],$this->message)
?>