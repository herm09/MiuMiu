<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2_test.css">
  <title>Miumiu</title>
</head>
<body>
  <main>

    <div class="row align-items-center">

        <div class="col-4">
            <h1 class="Title1">Inscription :</h1>
        </div>
        <div class="col-4">
            <p class="Title2">Formulaire</p>
        </div>

        <div class="row align-items-center">
            <div class="col-7">
                <form action="" method="POST" class="inscription">

                    <p><span class="error">* Champs requis</span></p>

                    <div class="Name">
                        <p class="infos">Nom :</p>
                        <div class="require">
                            <input type="text" name="nom" id="nom" required>
                            <span class="error"> * </span>
                        </div>
                    </div>

                    <p class="infos">Prénom :</p>
                    <div class="require">
                        <input type="text" name="prenom" id="prenom" required>
                        <span class="error"> * </span>
                    </div>

                    <p class="infos">Pseudo :</p>
                    <div class="require">
                        <input type="text" name="pseudo" id="infos" required>
                        <span class="error"> * </span>
                    </div>

                    <p class="infos">E-mail :</p>
                    <div class="require">
                        <input type="text" name="mail" id="mail" required>
                        <span class="error"> * </span>
                    </div>

                    <p class="infos">Date de naissance :</p>
                    <div class="form-group">
                        <label class="birthdate" for="date"></label>
                        <input class="form-control" type="date" id="date" >
                        <span class="error"> * </span>
                    </div>

                    <p class="infos">Mot de passe :</p>
                    <div class="require">
                        <input type="password" name="password" id="pass" required>
                        <span class="error"> * </span>
                    </div>

                    <br><br>
                    <a href="connexion.php">Se connecter</a>
                    <br>
                    <input class="btn btn-success w-100 btn-orange" href="home.template.php"  type="submit" value="Créer mon compte">
                    <!-- <imput class="btn btn-success w-100"><a href="index3.html">Login</a> -->
                </form>
            </div>
        </div>
    </div>
  </main>
</body>
</html>