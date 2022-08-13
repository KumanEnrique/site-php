<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\trabajadores\Model.php');
$db = new Model();

echo('<div class="container">');
printf('
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header"><h3 class="text-center">AÑADIR TRABAJADOR</h3></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="">Numero de control</label>
                            <input type="text" name="control_number" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Fecha final</label>
                            <input type="date" name="end_date" class="form-control">
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

if((isset($_POST['name']) &&!empty($_POST['name'])) && 
    (isset($_POST['control_number']) && !empty($_POST['control_number'])) &&
    (isset($_POST['end_date']) && !empty($_POST['end_date']))
){
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $control_number = filter_input(INPUT_POST, 'control_number', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $end_date = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $db->insert($name,$control_number,$end_date);

}else{
    print("todos los campos son necesarios");
}