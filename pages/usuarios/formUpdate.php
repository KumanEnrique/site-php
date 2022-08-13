<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\usuarios\Model.php');
$db = new Model();
printf('<div class="container">');
$row = $db->where($_POST['id']);
printf('
        <div class="row mt-3">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Actualizar usuario</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Departamento</label>
                                <input type="text" name="departament" id="" class="form-control" value="%s">
                            </div>
                            <div class="mb-3">
                                <label for="">Correo</label>
                                <input type="email" name="email" id="" class="form-control" value="%s">
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
$row['departamento'],
$row['correo'],
$row['id']
);
printf('</div>');
if((isset($_POST['name']) &&!empty($_POST['name'])) && 
    (isset($_POST['departament']) && !empty($_POST['departament'])) &&
    (isset($_POST['email']) && !empty($_POST['email']))
){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $departament = filter_input(INPUT_POST, 'departament', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $db->update($row['id'],$name,$departament,$email,$departament);

    print('<script>window.location.replace("http://localhost:8080/fg/inventario_site/v2/pages/usuarios/");</script>');
}else{
    print("todos los campos son necesarios");
}

include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');