<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$addButton = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="d-grid">
            <a href="%susers/formAdd" class="btn btn-danger">Add</a>
        </div>
    </div>
</div>
';
$table_head = '
<div class="row mt-4">
    <div class="col-lg-10 mx-auto">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Departament</th>
                    <th>Email</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
';
$table_body = '
                <tr>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>
                        <a href="%susers/getByID/%s" class="btn btn-info">Watch</a>
                        <a href="%susers/delete/%s" class="btn btn-secondary">Delete</a>
                    </td>
                </tr>
';
$table_footer = '
            </tbody>
        </table>
    </div>
</div>
';
printf($addButton,constant('URL_HOME'));
echo($table_head);
foreach($this->data as $row){
    printf($table_body,$row['nombre'],$row['departamento'],$row['correo'],constant('URL_HOME'),$row['id'],constant('URL_HOME'),$row['id']);
}
echo($table_footer);

