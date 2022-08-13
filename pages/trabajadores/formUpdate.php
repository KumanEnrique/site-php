<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\trabajadores\Model.php');
$db = new Model();
printf('<div class="container">');
$row = $db->where($_POST['id']);
printf('
        <div class="row mt-3">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Actualizar trabajador</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Numero de control</label>
                                <input type="text" name="control_number" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Fecha final</label>
                                <input type="date" name="end_date" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="id" class="form-control" value="%s">
                            </div>
                            <button class="btn btn-info">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
',
$row['nombre'],
$row['numero_control'],
$row['fecha_fin'],
$row['id']
);
printf('</div>');
if((isset($_POST['name']) &&!empty($_POST['name'])) && 
    (isset($_POST['control_number']) && !empty($_POST['control_number'])) &&
    (isset($_POST['end_date']) && !empty($_POST['end_date']))
){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $control_number = filter_input(INPUT_POST, 'control_number', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $departament = filter_input(INPUT_POST, 'departament', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $employee = filter_input(INPUT_POST, 'employee', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $db->update($row['id'],$name,$control_number,$end_date);

    print('<script>window.location.replace("http://localhost:8080/fg/inventario_site/v2/pages/trabajadores/");</script>');
}else{
    print("todos los campos son necesarios");
}

include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');