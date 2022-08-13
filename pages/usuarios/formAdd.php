<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\usuarios\Model.php');
$db = new Model();

echo('<div class="container">');
printf('
    <div class="row mt-4">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header"><h3 class="text-center">AÑADIR USUARIOS</h3></div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="">Departamento</label>
                            <input type="text" name="departament" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Correo</label>
                            <input type="email" name="email" class="form-control">
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
    (isset($_POST['departament']) && !empty($_POST['departament'])) &&
    (isset($_POST['email']) && !empty($_POST['email']))
){
    
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $departament = filter_input(INPUT_POST, 'departament', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $db->insert($name,$departament,$email);

}else{
    print("todos los campos son necesarios");
}