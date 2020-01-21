<?php
//de database gegevens die we gaan gebruiken om te gaan inlogen.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'mdbtc1');
define('DB_PASSWORD', 'SWr*4N5jywXG');
define('DB_NAME', 'mdtbc1');
 
//maak de connectie
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//check of er connectie is
if($link === false){
    die("<h1><b>Er ging iets mis !</h1></b>" . mysqli_connect_error());
}
?>