<?php

class TodoController {
    private $todo;

    public function __construct($todo) {
        $this->todo = $todo;
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? 'list';

        if ($action === 'add' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->todo->add($_POST['title'] ?? '');
            header('Location: index.php');
            exit;
        }

        if ($action === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->todo->update($_POST['id'] ?? 0, $_POST['title'] ?? '');
            header('Location: index.php');
            exit;
        }

        if ($action === 'delete' && isset($_GET['id'])) {
            $this->todo->delete($_GET['id']);
            header('Location: index.php');
            exit;
        }

        if ($action === 'toggle' && isset($_GET['id'])) {
            $this->todo->toggle($_GET['id']);
            header('Location: index.php');
            exit;
        }

        return $action;
    }
}

?>
