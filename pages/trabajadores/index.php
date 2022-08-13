<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\header.php');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\trabajadores\Model.php');
$db = new Model();
$HTML_add = '
    <div class="row mt-4">
        <div class="col-lg-4 mx-auto">
            <div class="d-grid">
                <h3 class="text-center">TRABAJADORES</h3>
                <a href="formAdd.php" class="btn btn-primary">Añadir</a>
            </div>
        </div>
    </div>
';
$HTML_thead = '
    <div class="row mt-3">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>NO. de control</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha final</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
';
$HTML_tbody = '
            <tr>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>%s</td>
                <td>
                    <form action="http://localhost:8080/fg/inventario_site/v2/pages/trabajadores/delete.php" method="post">
                        <input type="hidden" name="id" value="%s">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    <form action="http://localhost:8080/fg/inventario_site/v2/pages/trabajadores/formUpdate.php" method="post">
                        <input type="hidden" name="id" value="%s">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
                </td>
            </tr>
';
$HTML_tfoot = '
                </tbody>
            </table>
        </div>
    </div>
';
$datos = $db->select();
printf('<div class="container">');
printf($HTML_add);
printf($HTML_thead);
foreach ($datos as $key => $value) {
    printf($HTML_tbody,
        $value['nombre'],
        $value['numero_control'],
        $value['fecha_i'],
        $value['fecha_fin'],
        $value['id'],
        $value['id']
    );
}
printf($HTML_tfoot);
printf('</div>');
include_once('C:\xampp\htdocs\fg\inventario_site\v2\partials\footer.php');
