<?php 
    require_once 'database.php';
    require_once 'inscription.template.php';
    if (isset($_POST["nom"]) && isset($_POST["password"])) {
        $data = [
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "pseudo" => $_POST['pseudo'],
            "mail" => $_POST['mail'],
            "password" => $_POST['password'],
          ];
    
          $request_insert = $database->prepare("INSERT INTO `compte` (`userID`, `nom`, `prenom`, `pseudo`, `mail`, `password`) VALUES (NULL, :nom, :prenom, :pseudo, :mail, :password)");
          $articles_inserted = $request_insert->execute($data);
          $_SESSION['pseudo'] = $_POST['pseudo'];
          $_SESSION['userID'] = $database->lastInsertId();
          header("Location: home.php");
        exit();
    }
    
?>