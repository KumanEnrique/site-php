<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\orden\Model.php');
$db = new Model();

echo('<div class="container">');
printf('
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header"><h3 class="text-center">AÑADIR ORDEN</h3></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="encargado">Folio</label>
                            <input type="text" name="folio" class="form-control" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="name">Estado</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Descripción</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Departamento</label>
                            <input type="text" name="departament" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Trabajador</label>
                            <input type="text" name="employee" class="form-control">
                        </div>
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
');
echo('</div>');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');

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

    $db->insert($folio,$status,$description,$departament,$employee);

}else{
    print("todos los campos son necesarios");
}