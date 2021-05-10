<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<h1>Supprimer ou modifié vos billlets</h1>

<?php
while ($data = $posts->fetch())
{
?>
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title"><?= htmlspecialchars($data['title']) ?></h5>
        <p class="card-text"><?= nl2br(htmlspecialchars($data['content'])) ?></p>
        <button type="button" class="btn btn-danger">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
     
    </div>
    <div class="card-footer text-muted">
        <em>le <?= $data['creation_date_fr'] ?></em>
    </div>
</div>
<?php
}
$posts->closeCursor();
?>

<?php $content = ob_get_clean(); ?>
<?php require('view/frontend/template.php'); ?>