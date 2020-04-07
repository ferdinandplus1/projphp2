<?php 


//session_start();
$_SESSION['pseudonyme'] = $_POST['pseudonyme'];
// connexiion ala base de données


    try{

    $bdd = new PDO('mysql:host=localhost;dbname=todo','root','');
    }
    catch(Exception $e)
    {
    die ('Erreur: ' .$e->getMessage());
    }
    //

    echo "j'ai passe cette etape1";
    if (isset($_POST['email'])) { //Test du mail

        $_POST['email'] = htmlspecialchars($_POST['email']);
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) 
        { //format normal d'un mail
            echo "j'ai passe cette etape";
        } else {
            $erreur = "Adresse mail avec un mauvais format (ex correct: truc_bidule@site.fr) !";
        }
    }

    if (isset($_POST['pseudonyme']))
    {
        $_POST['pseudonyme'] = htmlspecialchars($_POST['pseudonyme']);
        if (preg_match("#^[a-zA-Z](.[^<>?]){6-20}#", $_POST['pseudonyme']))
        {
           $erreur = NULL; 
        } else{
            $erreur = 'Vous avez mal ecrit votre pseudonyme';
        }
    }
    $req = $bdd-> prepare("INSERT INTO connexion (sexe, pseudonyme, email, motDePasse)
    VALUES (?, ?, ?, ?)") ;
    $req->execute(array(
    $_POST['choix'],
    $_POST['pseudonyme'],
    $_POST['email'],
    $_POST['motDePasse'],
   
    ));


    echo "kjykjdgjkghghjfghfgfgfljmj";
    // afficher le message de bienvenue  si Homme ou Femme
    if ($_POST['choix']== "Homme")
    {
        echo 'Bienvnue Monsieur '.$_SESSION['pseudonyme'].'<br/>';
    }else{
        echo 'Bienvenue Madame '.$_SESSION['pseudonyme'].'<br/>';
    }
    

    
    


    
    
    //$reponse=$bdd->query('SELECT * FROM connexion');
    
    //while ($donnees = $reponse->fetch())
    //{
    //echo $donnees['pseudonyme'].'<br/>';
    //}
    //$reponse->closeCursor();
    ?>
    
