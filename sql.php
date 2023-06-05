<?php 
require "config.php";

$data = [];

//Gegevens uithalen van database
$result = mysqli_query($mysqli, "SELECT * FROM `leden`");
while ($row = mysqli_fetch_array($result)) {

    //Gegevens in array zetten
    $data[] = $row;
}

//Gegevens printen
echo json_encode($data);


?>