<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a href przsyła po get</title>
</head>
<body>
    <a href="odzbierz.php?imie=arkadiusz">POKAZ ZMIENNA</a>
    <div>
        <?php
            if(isset($_GET['imie'])) echo"{$_GET['imie']}"
        ?>
    </div>
</body>x
</html>