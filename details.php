<?php
require "config.php";

$data = [];
if(isset($_POST["id"])){
    //ID via post uitlezen
    $id = htmlentities($_POST["id"]);

    //Zoeken of er gegevens zijn met de meegestuurde id
    $result = mysqli_query($mysqli, "SELECT * FROM `leden` WHERE id=$id");
    
    //Als er gegevens bestaan, zet ze in een array
    if($result){
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    else{
        echo "FOUT";
    }
}
?>