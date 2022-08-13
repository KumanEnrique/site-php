<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$form_update = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">
                update a user
            </div>
            <div class="card-body">
                <form action="%susers/update" method="post">
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" disabled value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" autofocus value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="departament">Departament</label>
                        <input type="text" name="departament" id="departament" class="form-control" value="%s">
                    </div>
                    <div class="mb-3">
                        <label for="correo">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="%s">
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
printf($form_update,constant('URL_HOME'),$this->data['id'],$this->data['nombre'],$this->data['departamento'],$this->data['correo'],$this->message)
?>