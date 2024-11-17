<?php
$title="Supprimer stagiaires";
ob_start();
echo 'Voulez vous supprimer le stagiaire';
echo '<div class="links">';
    echo '<a href="index.php?action=destroy&id='.$_GET["id"].'" class="btn">Oui</a>';
    echo '<a href="index.php?action=list" class="btn">Non</a>';
echo '</div>';
$content = ob_get_clean();
include_once 'layout.php';