<?php
require "config.php";


if(isset($_POST["id"])){
    $id = $_POST["id"];
    $query = mysqli_query($mysqli, "DELETE FROM `leden` WHERE id = $id");
    if($query){
        //Print 10 als het gelukt is -Ik heb het op zo'n manier gedaan omdat de applicatie fout gaf toen ik string meestuurde-
        echo 10;
    }
}
?>

    