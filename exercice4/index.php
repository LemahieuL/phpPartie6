<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4 php Partie 6</title>
    </head>
    <body>
        <p><?= isset($_GET['language'], $_GET['server']) ? $_GET['language'] . ' ' . $_GET['server'] : 'Errors'; ?></p>
    </body>
</html>