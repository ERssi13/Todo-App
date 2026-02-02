<?php

$edit = $edit ?? null;

?>

<?php if ($edit): ?>
    <div class="edit-form">
        <h2>Modifier une tâche</h2>
        <form method="POST" action="index.php?action=update">
            <input type="hidden" name="id" value="<?= htmlspecialchars($edit['id']) ?>">
            <input type="text" name="title" value="<?= htmlspecialchars($edit['title']) ?>" required>
            <button type="submit">Mettre à jour</button>
            <a href="index.php" style="margin-left: 10px; text-decoration: none;"><button type="button">Annuler</button></a>
        </form>
    </div>
<?php endif; ?>

<form method="POST" action="index.php?action=add">
    <input type="text" name="title" placeholder="Ajouter une nouvelle tâche..." required>
    <button type="submit">Ajouter</button>
</form>
