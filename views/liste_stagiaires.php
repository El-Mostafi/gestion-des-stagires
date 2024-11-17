<?php
    $title ="Liste des stagiaires"; 
        ob_start();
        echo '<div class="links">';
        echo '<a href="index.php?action=create" class="btn">Ajouter</a>';
        echo '</div>';
        echo "<table class='table'>";
        echo"<tr><th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Login</th><th colspan='2'>Actions</th></tr>";
        foreach($lignes as $ligne){
        echo"<tr>";
        echo"<td>".$ligne['id']."</td>";
        echo"<td>".$ligne['nom']."</td>";
        echo"<td>".$ligne['prenom']."</td>";
        echo"<td>".$ligne['age']."</td>";
        echo"<td>".$ligne['login']."</td>";
        echo "<td><a href='index.php?action=edit&id=".$ligne['id']."' class='bt'>Modifier</a></td>";
        echo "<td><a href='index.php?action=delet&id=".$ligne['id']."' class='btnA'>Supprimer</a></td>";
        echo"</tr>";
        }
        echo"</table>";
        $content = ob_get_clean();
    include_once 'layout.php';
