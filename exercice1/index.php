
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1 php Partie 6</title>
    </head>
    <body>
        <p>Je m'apelle <?= isset($_GET['firstname'], $_GET['lastname']) ? $_GET['firstname'] . ' ' . $_GET['lastname'] : 'Errors'; ?></p>
    </body>
</html>