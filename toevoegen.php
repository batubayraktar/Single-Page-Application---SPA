<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "config.php";

if(isset($_POST["voornaam"])){

    //Waardes die via post verzonden zijn uitlezen
    $voornaam = htmlentities($_POST["voornaam"]);
    $achternaam = htmlentities($_POST["achternaam"]);
    $geboortedatum = $_POST["geboortedatum"];
    $geslacht = htmlentities($_POST["geslacht"]);
    $lid = $_POST["lid"];


    //Query uitvoeren
    $query = mysqli_query($mysqli, "INSERT INTO `leden`(`id`, `birth_date`, `first_name`, `last_name`, `gender`, `member_since`) VALUES (NULL,'$geboortedatum','$voornaam','$achternaam','$geslacht','$lid')");
    if($query){
        //Print "OK" als het gelukt is
        echo "OK";
    }
    else{
        echo "FOUT <br>";
        echo $voornaam . "<br>";
        echo $achternaam . "<br>";
        echo $geboortedatum . "<br>";
        echo $geslacht . "<br>";
        echo $lid . "<br>";
    }
}

?>