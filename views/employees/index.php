<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$addButton = '
<div class="row mt-4">
    <div class="col-lg-5 mx-auto">
        <div class="d-grid">
            <a href="%semployees/formAdd" class="btn btn-danger">Add</a>
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
                    <th>Control Number</th>
                    <th>Begin date</th>
                    <th>End date</th>
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
                    <td>
                        <a href="%semployees/getByID/%s" class="btn btn-info">Watch</a>
                        <a href="%semployees/delete/%s" class="btn btn-secondary">Delete</a>
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
    printf($table_body,$row['nombre'],$row['numero_control'],$row['fecha_i'],$row['fecha_fin'],constant('URL_HOME'),$row['id'],constant('URL_HOME'),$row['id']);
}
echo($table_footer);