<?php
//Foutmeldingen zichtbaar maken
ini_set('display_errors',1);
error_reporting(E_ALL);

// database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '87231';
$db_password = '42Batuhan630.';
$db_database = 'db_87231';

// maak de database-verdinding
$mysqli = mysqli_connect($db_hostname,$db_username,$db_password,$db_database);

//Als de verbinding niet gemaakt kan worden: geef een melding
if(!$mysqli){
echo "FOUT: geen connectie naar database. <br>";
echo "Error ". mysqli_connect_error() . "<br/>";
exit;
}

/*** TEST ***/
// else{
//     echo "Verbinding met " . $db_database . " is gemaakt!<br/>";
// }
?>