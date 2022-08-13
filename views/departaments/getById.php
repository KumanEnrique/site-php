<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$form_update = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">
                update a departament
            </div>
            <div class="card-body">
                <form action="%sdepartaments/update" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" disabled value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="in_charge">In charge</label>
                        <input type="text" name="in_charge" id="in_charge" class="form-control" autofocus value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="extension">Extension</label>
                        <input type="text" name="extension" id="extension" class="form-control" value="%s">
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
printf($form_update,constant('URL_HOME'),$this->data['id'],$this->data['encargado'],$this->data['nombre'],$this->data['extension'],$this->message);