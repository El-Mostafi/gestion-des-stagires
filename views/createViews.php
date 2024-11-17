<?php
        $title ="Ajouter stagiaires"; 
        ob_start();
?>
        <form action="store.php" method="post">
        <div class="ajouter">
                <div class="input">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="Nom">
                </div>
                <div class="input">
                <label for="prenom">Prenom :</label>
                <input type="text" id="prenom" name="Prenom">
                </div>
                <div class="input">
                <label for="age">Age :</label>
                <input type="text" id="age" name="Age">
                </div>
                <div class="input">
                <label for="login">Login :</label>
                <input type="text" id="login" name="Login">
                </div>
                <div class="input">
                <label for="pass">Password :</label>
                <input type="password" id="pass" name="Password" >
                </div>
                <div class="validation">
                <input type="submit" name="Ajouter">
                <input type="reset" name="Anuller">
                </div>
        </div>
        </form>
<?php
        echo"</table>";
        $content = ob_get_clean();
include_once 'layout.php';
?>