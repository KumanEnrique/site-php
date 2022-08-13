<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\departamentos\Model.php');
$db = new Model();
printf('<div class="container">');
$row = $db->where($_POST['id']);
printf('
        <div class="row mt-3">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Actualizar departamento</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Encargado</label>
                                <input type="text" name="in_charge" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Extensión</label>
                                <input type="number" name="extension" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="id" id="image" class="form-control" value="%s">
                            </div>
                            <button class="btn btn-info">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
',
$row['encargado'],
$row['nombre'],
$row['extension'],
$row['id']
);
printf('</div>');
if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['in_charge']) && !empty($_POST['in_charge'])) && (isset($_POST['name']) && !empty($_POST['name'])) ){
    $in_charge = filter_input(INPUT_POST, 'in_charge', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $extension = filter_input(INPUT_POST, 'extension', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $db->update($row['id'], $in_charge ,$name, $extension);
    print('<script>window.location.replace("http://localhost:8080/fg/inventario_site/v2/pages/departamentos/");</script>');
}else{
    print("todos los campos son necesarios");
}

include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');