
<!doctype html>
<html lang="en" data-bs-theme="auto">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_test.css">
        <title>Miumiu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body class="text-center">

        <main class="form-signin w-100 m-auto">

            <form action="" method="POST">
                <h1 class="h3 mb-3 fw-normal bs-body-orange">Connexion</h1>
                
                <br>
                <p><span class="error">* Champs requis</span></p>
                
                <div class="form-floating">
                    <input type="text" name="nom" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput" class="form">Pseudo :</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Mot de passe :</label>
                </div>
                
                <div class="col-4 text-center">
                    <a href="inscription.php" class="text-justify">S'inscrire</a>
                </div>

                <br><br>
                <div>
                    <button class="btn btn-lg btn-primary btn-blanc" href="" style="background : grey; border-color : grey">Connexion</button>
                </div>
                
            </form>

        </main>

  </body>
</html>