<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\departamentos\Model.php');
$db = new Model();

echo('<div class="container">');
printf('
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header"><h3 class="text-center">AÑADIR DEPARTAMENTOS</h3></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="encargado">Encargado</label>
                            <input type="text" name="in_charge" class="form-control" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="name">Extensión</label>
                            <input type="text" name="extension" class="form-control">
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
if((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['in_charge']) && !empty($_POST['in_charge'])) && (isset($_POST['name']) && !empty($_POST['name'])) ){
    $in_charge = filter_input(INPUT_POST, 'in_charge', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $extension = filter_input(INPUT_POST, 'extension', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $db->insert($in_charge,$name,$extension);

}else{
    print("todos los campos son necesarios");
}