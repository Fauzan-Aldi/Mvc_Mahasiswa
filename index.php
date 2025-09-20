<?php
require_once 'config.php';
require_once 'models/Mahasiswa.php';
require_once 'controllers/MahasiswaController.php';

// Simple routing
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller = new MahasiswaController();

switch($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'update':
        $controller->update($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'show':
        $controller->show($id);
        break;
    default:
        $controller->index();
        break;
}
?>
