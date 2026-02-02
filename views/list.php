<?php

$todos = $todos ?? [];

?>

<ul>
    <?php foreach ($todos as $todo): ?>
        <li class="<?= $todo['done'] ? 'done' : '' ?>">
            <span><?= htmlspecialchars($todo['title']) ?></span>
            <div class="actions">
                <a href="index.php?action=toggle&id=<?= $todo['id'] ?>"><button class="btn-toggle"><?= $todo['done'] ? '↩️' : '✅' ?></button></a>
                <a href="index.php?action=edit&id=<?= $todo['id'] ?>"><button class="btn-edit">✏️</button></a>
                <a href="index.php?action=delete&id=<?= $todo['id'] ?>" onclick="return confirm('Sûr?');"><button class="btn-delete">🗑️</button></a>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
