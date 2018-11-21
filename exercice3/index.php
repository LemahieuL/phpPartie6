<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3 php Partie 6</title>
    </head>
    <body>
        <p><?= isset($_GET['startDate'], $_GET['endDate'])? $_GET['startDate'] . ' ' . $_GET['endDate'] : 'Errors'; ?></p>
    </body>
</html>