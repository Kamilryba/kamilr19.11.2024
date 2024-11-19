<?php
$conn = new mysqli("localhost","root","","company",3306);
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pobierz z bazy danych</title>
</head>
<body>
    <?PHP
        $zapytanie = $conn->query("SELECT * from departments;");
        //department_id  department_name
        while($RESOULT = mysqli_fetch_assoc($zapytanie)){
            echo $RESOULT['department_id']."--------------------".$RESOULT['department_name']."<br/>";
        }
        echo("<br/>");
        
        $zapytanie2 = $conn->query("SELECT department_id,department_name from departments;");
        //department_id  department _name
        while(list($department_id,$department_name)= mysqli_fetch_row($zapytanie2)){
             echo "$department_id,$department_name <br/>";
         }
    ?>
</body>
</html>
<?PHP
$conn->CLOSE()
?>