<?php
require('headers.php');
require('functions.php');

//Tarkistetaan tuleeko palvelimelle basic login tiedot
if( isset($_SERVER['PHP_AUTH_USER']) ){
    if(checkUser(createDbConnection(), $_SERVER['PHP_AUTH_USER'],$_SERVER["PHP_AUTH_PW"] )){
        $_SESSION["user"] = $_SERVER['PHP_AUTH_USER'];

        

        echo '{"info":"kirjauduit sisään"}';
        header('Content-Type: application/json');
        exit;
    }
}




/* käyttäjälle unauhtorized-otsikko */
echo '{"info":"Failed to login"}';
        header('Content-Type: application/json');
echo "error";
header('HTTP/1.1 401');
exit;



?>