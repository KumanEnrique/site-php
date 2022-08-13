<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\orden\Model.php');
$db = new Model();
printf('<div class="container">');
$row = $db->where($_POST['id']);
printf('
        <div class="row mt-3">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Actualizar orden</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Folio</label>
                                <input type="text" name="folio" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Estado</label>
                                <input type="text" name="status" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Descripción</label>
                                <input type="text" name="description" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Departamento</label>
                                <input type="text" name="departament" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Trabajador</label>
                                <input type="text" name="employee" id="" class="form-control" value="%s">
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
$row['folio'],
$row['estado'],
$row['descripcion'],
$row['departamento'],
$row['trabajador'],
$row['id']
);
printf('</div>');
if((isset($_POST['folio']) &&!empty($_POST['folio'])) && 
    (isset($_POST['status']) && !empty($_POST['status'])) &&
    (isset($_POST['description']) && !empty($_POST['description'])) &&
    (isset($_POST['departament']) && !empty($_POST['departament'])) &&
    (isset($_POST['employee']) && !empty($_POST['employee']))
){
    $folio = filter_input(INPUT_POST, 'folio', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $departament = filter_input(INPUT_POST, 'departament', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $employee = filter_input(INPUT_POST, 'employee', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $db->update($row['id'],$folio,$status,$description,$departament,$employee);

    print('<script>window.location.replace("http://localhost:8080/fg/inventario_site/v2/pages/orden/");</script>');
}else{
    print("todos los campos son necesarios");
}

include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');