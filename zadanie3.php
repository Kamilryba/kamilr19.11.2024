<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przekazywanie zmiennych method "POST"</title>
</head>

<body>
    <form action="zadanie3.php" method="post">
        <label for="imie">Podaj Imie</label>
        <input type="text" id="imie" name="imie"><br>
        <label for="nazwisko">Podaj nazwisko</label>
        <input type="text" id="nazwisko" name="nazwisko"><br>
        <label for="wiek">Podaj wiek</label>
        <input type="text" id="wiek" name="wiek"><br>
        <input type="submit" value="ok">
    </form>
    <hr>
    <section>
    <?php
    //ważne:
    if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['wiek'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $wiek = $_POST['wiek'];
        echo $imie," ",$nazwisko," ",$wiek;
    }
    ?>
    </section>
</body>

</html>