<?php ob_start(); ?>

<h1>Bienvenu dans votre espace administrateur</h1>

<h2>Gérer les Commentaires</h2>

<div class="carComment">


    <h3>ici pour gerer comentaires</h3>

</div>

<?php


while ($reportedComment = $reportedComments->fetch()) 
{
?>

<?= htmlspecialchars($reportedComment['author']) ?>
<p><?= nl2br(htmlspecialchars($reportedComment['comment'])) ?></p>
<?php
}

?>
<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>