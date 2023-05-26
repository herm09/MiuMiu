<?php
    $host = "localhost";
    $db = "miumiu";
    $user = "root";
    $pass = "";

    try {
        $database = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch (\PDOException $ex) {
        die("Erreur : " . $ex->getMessage());
    }

    session_start();

    // $GetAccountInfo = $database->prepare('SELECT * FROM compte');
    // $GetAccountInfo->execute();
    // $AccountInfo = $GetAccountInfo->fetchAll(PDO::FETCH_ASSOC);

    // $GetPostInfo = $database->prepare('SELECT * FROM articles ORDER BY postID DESC');
    // $GetPostInfo->execute();
    // $PostInfo = $GetPostInfo->fetchAll(PDO::FETCH_ASSOC);

    // $Username;
    // $UserID;

    // session_abort();
?>