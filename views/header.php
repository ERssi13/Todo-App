<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { margin-bottom: 30px; color: #333; }
        form { margin-bottom: 30px; }
        input[type="text"] { width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px; }
        button { padding: 10px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .btn-delete { background: #dc3545; padding: 5px 10px; font-size: 12px; }
        .btn-delete:hover { background: #c82333; }
        .btn-edit { background: #28a745; padding: 5px 10px; font-size: 12px; margin-right: 5px; }
        .btn-edit:hover { background: #218838; }
        .btn-toggle { background: #ffc107; padding: 5px 10px; font-size: 12px; margin-right: 5px; }
        .btn-toggle:hover { background: #e0a800; }
        ul { list-style: none; }
        li { padding: 15px; background: #f9f9f9; margin-bottom: 10px; border-radius: 4px; display: flex; justify-content: space-between; align-items: center; }
        li.done { opacity: 0.6; }
        li.done span { text-decoration: line-through; }
        .actions { display: flex; gap: 5px; }
        .edit-form { background: #e8f4f8; padding: 20px; border-radius: 4px; margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Todo App</h1>
