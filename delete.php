<?php require_once 'database.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {     
        if (isset($_POST['form']) && $_POST['form'] === "formulaire_suppression_article") {       
            if (!empty($_POST['article_id'])) {  

                $data = [           
                    "article_id" => $_POST['article_id'],         
                ];         

                $request_delete = $database->prepare("DELETE FROM articles WHERE id = :article_id");         
                $article_deleted = $request_delete->execute($data);         
                header('Location: index2.php');       
            }     
        }   
    } 
?>