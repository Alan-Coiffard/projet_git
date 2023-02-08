<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat libre</title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">-->
    <link rel="stylesheet" href="./lib/css/styles.css">
    <link rel="stylesheet" href="./lib/css/accueil.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenue sur notre chat en ligne!</h1>
            <p class="lead">Connectez-vous pour discuter avec les autres utilisateurs.</p>
            <hr class="my-4">
            <p>Cliquez sur le bouton ci-dessous pour vous connecter.</p>
            <div class="button">
            <a class="style_button" href="?action=login&controller=user" role="button">Connexion</a>
            </div>
            <hr class="my-4">
            <p>Vous n'avez pas de compte ? Cliquez sur le bouton ci-dessous pour vous inscrire.</p>
            <div class="button">
            <a class="style_button" href="?action=inscription&controller=user" role="button">S'inscrire</a>
            </div>
        </div>
    </div>
</body>
</html>