<?php

class Todo {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM todos ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM todos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function add($title) {
        $title = trim($title);
        if (empty($title)) return false;
        $stmt = $this->db->prepare("INSERT INTO todos (title) VALUES (?)");
        return $stmt->execute([$title]);
    }

    public function update($id, $title) {
        $title = trim($title);
        if (empty($title)) return false;
        $stmt = $this->db->prepare("UPDATE todos SET title = ? WHERE id = ?");
        return $stmt->execute([$title, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM todos WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function toggle($id) {
        $stmt = $this->db->prepare("UPDATE todos SET done = NOT done WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

?>
