<?php include_once("polaczenie.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pobieranie nazwy departamentu tylko dla id reportu</title>
</head>

<body>
    <form action="zadanie6.php" method="post">
        <select name="rekord">
            <option value="1">Rekord 1</option>
            <option value="2">Rekord 2</option>
            <option value="3">Rekord 3</option>
            <option value="4">Rekord 4</option>
            <option value="5">Rekord 5</option>
            <option value="6">Rekord 6</option>
            <option value="7">Rekord 7</option>
            <option value="8">Rekord 8</option>
            <option value="9">Rekord 9</option>
            <option value="10">Rekord 10</option>
        </select>
        <input type="submit" name="przycisk" value="POBIERZ">
    </form>
    <div>
        <?php
        if (isset($_POST['przycisk'])) {
            $id = $_POST['rekord'];
            $zapytanie = $polaczenie->query("SELECT * from departments where department_id = $id");
            while(list($iddep, $nameDep)=mysqli_fetch_row($zapytanie)){
                echo "$nameDep, $iddep<br/>";
            }
        }
        ?>
    </div>
</body>

</html>
<?php $polaczenie->close() ?>                                                                                                                                                                                                                      