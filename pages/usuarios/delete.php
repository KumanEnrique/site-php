<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v2\pages\usuarios\Model.php');
$db = new Model();
$db->delete($_POST['id']);
header("Location: http://localhost:8080/fg/inventario_site/v2/pages/usuarios/");