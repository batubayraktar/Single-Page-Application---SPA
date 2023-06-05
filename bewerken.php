<?php
require "config.php";


if(isset($_POST["id"])){

    //Gegevens uit inputvelden uitlezen
    $id = htmlentities($_POST["id"]);
    $voornaam = htmlentities($_POST["voornaam"]);
    $achternaam = htmlentities($_POST["achternaam"]);
    $geboortedatum = htmlentities($_POST["geboortedatum"]);
    $geslacht = htmlentities($_POST["geslacht"]);
    $lid = htmlentities($_POST["lid"]);

    //Gegevens updaten
    $query = mysqli_query($mysqli, "UPDATE `leden` SET `birth_date`='$geboortedatum',`first_name`='$voornaam',`last_name`='$achternaam',`gender`='$geslacht',`member_since`='$lid' WHERE id = $id");
    if($query){
        //Als het gelukt is, print "OK"
        echo "OK";
    }
    else{
        echo "FOUT <br>";
        echo $id . "<br>";
        echo $voornaam . "<br>";
        echo $achternaam . "<br>";
        echo $geboortedatum . "<br>";
        echo $geslacht . "<br>";
        echo $lid . "<br>";
    }
}
?>