<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$form_update = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">
                update a employee
            </div>
            <div class="card-body">
                <form action="%semployees/update" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" disabled value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" autofocus value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="control_number">Control Number</label>
                        <input type="text" name="control_number" id="control_number" class="form-control" value="%s">
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
printf($form_update,constant('URL_HOME'),$this->data['id'],$this->data['nombre'],$this->data['numero_control'],$this->data['fecha_i'],$this->data['fecha_fin'],$this->message)
?>