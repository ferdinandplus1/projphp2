



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css"/>
    <title>SITE WEB</title>

</head>
<body>
    <div id="container">
<form  method="post"  action="connexion.php">
    <h1>Connexion</h1>
    <p>
    <label for="sexe" >sexe</label>
        <select name="choix" id="">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>

    </p>

    <strong> PSEUDO</strong> <em> (15 caracteres au maximum)</em> <br/>
    <input type="text" name="pseudonyme" placeholder="Entrer votre Pseudo" id="pseudonyme"><br/>
    <strong>EMAIL</strong><br/>
    <input type="text" name="email" placeholder="Entrer votre Email" id="email"><br/>
    

    <strong>PASSWORD </strong><br/>
    <em>seuls les mots en lettres et chiffres sont autorisés</em><br/>
    <input type="password" name="motDePasse" placeholder="Entrer votre Password" id="password"><br/>
    
     
<p>
    <input type="submit" id="submit" value="Se connecter"><br/>
</p>
</form>
    
</body>
</html
