<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <h1>Ma session privée</h1>
<?php
if(!$_SESSION['check'] || $_SESSION['check'] === false) {
    if($_SESSION['check'] === false) {
        echo "<div id='error'>Le mot de passe est incorrect!</div>";
    }
    ?>
    <div id="formulaire">
        <form action="admin.php" method="POST">
            <label for="password">Veuillez entrer le mot de passe pour avoir tout le comtenu de la page: </label>
            <input type="password" name="password" id="password" maxlength="10">
            <input type="submit">
        </form>
    </div> <?php
}
else {
    echo "<div id='private'>Bienvenu dans le contenu priver!</div>";
    session_destroy();
}?>
</body>
</html>
