<?php 
    require_once 'database.php';
    require_once 'connexion.template.php';

    
    $GetAccountInfo = $database->prepare('SELECT * FROM compte');
    $GetAccountInfo->execute();
    $AccountInfo = $GetAccountInfo->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['nom']) && !empty($_POST['pass'])) {
            foreach ($AccountInfo as $datalog) {
                if ($_POST['nom'] === $datalog['pseudo']) {
                    if ($_POST['pass'] === $datalog['password']) {
                        $_SESSION['pseudo'] = $datalog['pseudo'];
                        $_SESSION['userID'] = $datalog['userID'];
                        echo "<script>location.href='home.php';</script>";
                        exit;
                    } else {
                        echo "<p>wrong password</p>";
                    }
                }
            }
        }
    }
?>