<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$addButton = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="d-grid">
            <a href="%sorder/formAdd" class="btn btn-danger">Add</a>
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
                    <th>Folio</th>
                    <th>State</th>
                    <th>Description</th>
                    <th>Departament</th>
                    <th>Employee</th>
                    <th>Begin Date</th>
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
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>
                        <a href="%sorder/getByID/%s" class="btn btn-info">Watch</a>
                        <a href="%sorder/delete/%s" class="btn btn-secondary">Delete</a>
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
    printf($table_body,$row['folio'],$row['estado'],$row['descripcion'],$row['departamento'],$row['trabajador'],$row['fecha_i'],constant('URL_HOME'),$row['id'],constant('URL_HOME'),$row['id']);
}
echo($table_footer);