<?php 
//session_start();
$_SESSION['pseudonyme'] = $_POST['pseudonyme'];

try{

    $bdd = new PDO('mysql:host=localhost;dbname=todo','root','');
    }
    catch(Exception $e)
    {
    die ('Erreur: ' .$e->getMessage());
    }
     $checkbox=$_POST['sexe'];
     $chk="";
     foreach($checkbox as $chk1)
     {
        $chk .=$chk1. ",";

     }

    $req = $bdd-> prepare("INSERT INTO connexion (sexe, pseudonyme, email, motDePasse)
    VALUES ('$chk', ?, ?, ?)") ;
    $req->execute(array(
    $_POST['sexe'],
    $_POST['pseudonyme'],
    $_POST['email'],
    $_POST['motDePasse'],
   
    ));
    
    echo  'Bienvenue Madame '.$_SESSION['pseudonyme'].'<br/>' .' vous avez bien ete ajoute';
    
    
    
    //$reponse=$bdd->query('SELECT * FROM connexion');
    
    //while ($donnees = $reponse->fetch())
    //{
    //echo $donnees['pseudonyme'].'<br/>';
    //}
    //$reponse->closeCursor();
    ?>
    
