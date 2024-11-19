<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przekazywanie zmiennych method "get"</title>
</head>

<body>
    <form action="zadanie.php">
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
    if(isset($_GET['imie']) && isset($_GET['nazwisko']) && isset($_GET['wiek'])){
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $wiek = $_GET['wiek'];
        echo $imie," ",$nazwisko," ",$wiek;
    }
    ?>
    </section>
</body>

</html>