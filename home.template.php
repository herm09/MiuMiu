<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiuMiu</title>
    <link rel="stylesheet" href="style_test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <?php
        if (!isset($_SESSION["userID"]))
            echo "<script defer src='popup.js'></script>";
    ?>
</head>
    <body style="background-color: var(--background);">
        <?php require_once 'header.php'; ?>

        <div class="mainpage">
            <div class="tweets"> <!-- division gauche avec les nv tweets et les tweets deja postes -->
                <div class="home"> <!-- 1ere division des tweets -->
                    <h3 class="accueil">Home</h3>
                    <div class="HomeButtons">
                        <p class="page">For you</p>
                        <p class="autre">Following</p>
                    </div>
                </div>
                <div class="newtweet"> <!-- division pour les nouveaux posts -->
                    <img src="Images_test/pp.png" alt="Photo de profil" class="cercle">
                    <nav class="new">
                        <p class="question">Nouveau post</p>
                        <div>
                            <img src="Images_test/icon_images.png" alt="Images" class="post">
                            <img src="Images_test/icon_gif.png" alt="Gif" class="post">
                            <img src="Images_test/icon_poll.png" alt="Poll" class="post">
                            <img src="Images_test/icon_emoji.png" alt="Emojis" class="post">
                            <img src="Images_test/icon_schedule.png" alt="Schedule" class="post">
                            <img src="Images_test/icon_position.png" alt="Position" class="post">
                        </div>
                    </nav>
                    <div class="BoutonDiv">
                        <button>
                            <p>Ecrire</p>
                        </button>
                    </div>
                </div>
                <div class="popup">
                    <div class="content">
                        <h1>Abonnez-vous !</h1>
                        <a href="./inscription.php">Inscription</a>
                    </div>
                </div>
                <div class="recenttweet"> <!-- division des tweets deja postés -->
                    <h2 class="articles">Articles</h2>
                    <br>
                    <?php
                        if ($PostInfo != null) {
                            foreach ($PostInfo as $Post) {
                                $Author = $Post['Author'];
                                $PostsID = $Post['postID'];
                                $Image = $Post['Image1'];
                                $Tags = $Post['Tags'];
                                echo date("d/m/Y", strtotime($Post['date'])) . " ". date("H:i", strtotime($Post['date'])); 
                                if (isset($_SESSION['userID']) && ($Post['Author'] == $Username)) :
                                ?>
                                    <form action ='' method='POST' class='tweet1 <?= $Tags ?>'>
                                        <input type='hidden' name = 'ID' value = '<?= $PostsID ?>'>
                                        <div>
                                            <img src='Images_test/pp_person1.png'alt='Photo de profil' class='person1'>
                                        </div>
                                        <div style='width: 50%;'>
                                            <h6 class='pseudo1'><?= $Author ?></h6>
                                            <p class='resum1'><?= $Post['Content'] ?></p>
                                            <?php if (!empty($Image)): ?>
                                                <img src='./upload/<?= $Image ?>' style='width: 100%;' class=''>
                                            <?php endif; ?>
                                            <p class='tags' style = 'color: white'><?= $Tags ?></p>
                                        </div>
                                        <nav>
                                            <img src='Images_test/icon_bin.png' alt='Poubelle' class='Poubelle'>
                                            <img src='Images_test/icon_commentaire.png' alt='Commentaires' class='post1'>
                                            <img src='Images_test/icon_rt.png' alt='Repost' class='post1'>
                                            <img src='Images_test/icon_like.png' alt='Like' class='post1'>
                                            <img src='Images_test/icon_share.png' alt='Partager' class='post1'>
                                            <img src='Images_test/icon_vues.png' alt='Vues' class='post1'>
                                            <p class='opacity' style='text-align: center;'>Vues : <br> 60% femmes <br> 40% hommes</p>
                                            <input class = 'deletebutton' type='submit' value = 'delete'>
                                            </nav>
                                    </form>
                                    <?php
                                else:
                                ?>
                                    <form action ='' method='POST' class='tweet1 <? $Tags ?>'>
                                        <input type='hidden' name = 'ID' value = '<? $PostsID ?>'>
                                        <img src='Images_test/pp_person1.png'alt='Photo de profil' class='person1'>
                                        <div style='width: 50%;>
                                            <h6 class='pseudo1'>{<? $Author ?>}</h6>
                                            <img src='{<? $Image ?>}' style='width: 100%;' class=''>
                                            <p class='resum1'>{<? $Post['Content'] ?>}</p>
                                        </div>
                                        <nav>
                                            <img src='Images_test/icon_bin.png' alt='Poubelle' class='Poubelle'>
                                            <img src='Images_test/icon_commentaire.png' alt='Commentaires' class='post1'>
                                            <img src='Images_test/icon_rt.png' alt='Repost' class='post1'>
                                            <img src='Images_test/icon_like.png' alt='Like' class='post1'>
                                            <img src='Images_test/icon_share.png' alt='Partager' class='post1'>
                                            <img src='Images_test/icon_vues.png' alt='Vues' class='post1'>
                                            <p class='opacity' style='text-align: center;'>Vues : <br> 60% femmes <br> 40% hommes</p>
                                        </nav>
                                    </form>
                                <?php
                                endif;
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="suggestions"> <!-- division droite recherche, tags, suggestions -->
                <h3 class="suggest">Suggestions</h3>
                <a href class="recherche">Recherche</a>
                <br><br><br>
                <form action="" method="get">
                    <input type="hidden" name="form" value="formulaire_recherche">
                    <label for="recherche" class="Rechercher">Rechercher :</label>
                    <input type="text" name="recherche" id="recherche">
                    <br>
                </form>
                <div class="hashtags">
                    <ul class="tag">
                        <button type="button" class="btn btn-warning" id="all">
                            Tout <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-primary" id="footballbtn">
                            Football <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-secondary" id="santebtn">
                            Santé <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-success" id="gamebtn">
                            Jeux vidéos <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-danger" id="actualitesbtn">
                            Actualités <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-warning" id="technobtn">
                            Nouvelles technologies <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-dark" id="politiquebtn">
                            Politique <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-light" id="musiquebtn">
                            Musique <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-info" id="animauxbtn">
                            Animaux <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-secondary" id="naturebtn">
                            Nature <span class="badge badge-light"></span>
                        </button>
                        <button type="button" class="btn btn-success" id="tempsbtn">
                            Temps <span class="badge badge-light"></span>
                        </button>
                    </ul>
                </div>
            </div>
            <form class='Modale' action='' method = 'POST' enctype='multipart/form-data'>
                <input type='hidden' name='Author' value='<?php echo $Username?>'>
                <input class="msg" type='text' name='Content' placeholder='Content' style='width: 30%; height:30%;word-wrap: break-word; margin-right: 40vw; margin: 0'>
                <input type='file' accept='image/png, image/jpeg' name='image_url'>
                
                <button class='close'>x</button>
                <select name="Tags" id="tag">
                    <option value="Football">Football</option>
                    <option value="Santé">Santé</option>
                    <option value="Jeux-vidéos">Jeux vidéos</option>
                    <option value="Actualités">Actualités</option>
                    <option value="Nouvelles-technologies">Nouvelles technologies</option>
                    <option value="Politique">Politique</option>
                    <option value="Musique">Musique</option>
                    <option value="Animaux">Animaux</option>
                    <option value="Nature">Nature</option>
                    <option value="Temps">Temps</option>
                </select>
                <input type='submit' name='Post' value='Envoyer'>
            </form>
        </div>
        <script src="main.js"></script>
    </body>
</html>