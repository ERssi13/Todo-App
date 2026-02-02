<?php

require_once 'config/database.php';
require_once 'models/Todo.php';

session_start();

$todo = new Todo($db);
$action = $_GET['action'] ?? 'list';

if ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $todo->add($_POST['title'] ?? '');
    header('Location: index.php');
    exit;
}

if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $todo->update($_POST['id'] ?? 0, $_POST['title'] ?? '');
    header('Location: index.php');
    exit;
}

if ($action === 'delete' && isset($_GET['id'])) {
    $todo->delete($_GET['id']);
    header('Location: index.php');
    exit;
}

if ($action === 'toggle' && isset($_GET['id'])) {
    $todo->toggle($_GET['id']);
    header('Location: index.php');
    exit;
}

$todos = $todo->getAll();
$edit = null;

if ($action === 'edit' && isset($_GET['id'])) {
    $edit = $todo->getById($_GET['id']);
}

require_once 'views/header.php';
require_once 'views/form.php';
require_once 'views/list.php';
require_once 'views/footer.php';

?>
