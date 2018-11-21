<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6 php Partie 6</title>
    </head>
    <body>
        <p><?= isset($_GET['building'], $_GET['room']) ? $_GET['building'] . ' ' . $_GET['room'] : 'Errors'; ?></p>
    </body>
</html>