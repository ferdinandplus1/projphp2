<?php 



?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE WEB</title>
</head>
<body>
<form action="connexion.php" method="post">
<p>
    choississez votre sexe :<br/>
    <label>Homme</label>
    <input type="checkbox" name="sexe []" value="Homme"  id="Homme" ><br/>
    <label>Femme</label>
    <input type="checkbox" name="sexe []" value="Femme" id="Femme" ><br/>
</p>
<p>
    <label> pseudo (15 caracteres au maximum):</label>
    <input type="text" name="pseudonyme" id="pseudonyme"><br/>
    <?php
    if (isset($_POST['pseudonyme']))
    {
        $_POST['pseudonyme'] = htmlspecialchars($_post['pseudonyme']);
        if (preg_match("#^[a-zA-Z](.[^<>?]){6-20}#", $_POST['pseudonyme']))
        {
           $erreur = NULL; 
        } else{
            $erreur = 'Vous avez mal ecrit votre pseudonyme';
        }
    }

     ?>
</p>
<p>
    <label>email:</label>
    <input type="text" name="email" id="email"><br/> 
</p>

<p>
    <label >mot de passe:</label>
    <input type="password" name="password" id="password"><br/><em>seuls les mots en lettres et chiffres sont autorisés</em>
</p>
<p>
    <input type="submit" value="envoyer"><br/>
</p>
</form>
    
</body>
</html><p>
    <input type="submit" value="envoyer"><br/>
</p>