<?php
    require_once 'database.php';

    $GetPostInfo = $database->prepare('SELECT * FROM articles ORDER BY postID DESC');
    $GetPostInfo->execute();
    $PostInfo = $GetPostInfo->fetchAll(PDO::FETCH_ASSOC);


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['ID'])) {
            $DelPostdata = [
                'PostID' => $_POST['ID'],
            ];
            $requeteDelPost= $database->prepare("DELETE FROM articles WHERE postID = :PostID");
            $requeteDelPost->execute($DelPostdata);
            echo "<script>location.href='home.php';</script>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['Author']) && !empty($_POST['Content'])) {
            
            $imageName = null;

            if ($_FILES['image_url']) {
                $imageName = $_FILES['image_url']['name'];
                $tmpImageName = $_FILES['image_url']['tmp_name'];
                $upload = 'upload/';
                move_uploaded_file($tmpImageName,$upload.$imageName);
            }

            $AddPostdata = [
                'Author' => $_POST['Author'],
                'Image' => $imageName,
                'CtnPost' => $_POST['Content'],
                'Tags' => $_POST['Tags'],
            ];

            $requeteADDPost= $database->prepare("INSERT INTO articles (Author, Content, Image1, postID, Date, Time, Tags) VALUES (:Author, :CtnPost, :Image, NOT NULL, NOW(), NOW(), :Tags)");
            $requeteADDPost->execute($AddPostdata);

            echo "<script>location.href='home.php';</script>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['nom']) && !empty($_POST['PFP'])) {
            print("pololo");
            foreach ($AccountInfo as $datalog) {
                if ($datalog['Username'] === !empty($_POST['User'])) {
                    echo "<p style='color:black;'>Account with this username already exists</p>";
                }
                if ($datalog['Email'] === !empty($_POST['Email'])) {
                    echo "<p style='color:black;'>Account with this Email already exists</p>";
                }
            }
            $acountdata = [
                'UserName' => $_POST['infos'],
                'Password' => $_POST['Password'],
                'Prenom' => $_POST['prenom'],
                'Nom' => $_POST['prenom'],
                'Mail' => $_POST['Email'],
            ];
            $requeteSignIn = $database->prepare("INSERT INTO accounts (userID, nom, prenom, pseudo, mail, password, tags) VALUES ( NOT NULL, :Nom, :Prenom, :UserName, :Mail, :Tags)");
            $requeteSignIn->execute($acountdata);
            echo "<p style='color:black;'>account created</p>";
        }
    }
    
    if(isset($_SESSION['pseudo'])) {
        $Username = $_SESSION['pseudo'];
        $UserID = $_SESSION['userID'];
    }


    require_once 'home.template.php';

?>