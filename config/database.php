<?php

try {
    $db = new PDO(
        "mysql:host=localhost;dbname=todo_app",
        "root",
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $e) {
    die("Erreur BD: " . $e->getMessage());
}

?>
