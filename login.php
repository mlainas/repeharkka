<?php
require('headers.php');
require('functions.php');

//Tarkistetaan tuleeko palvelimelle basic login tiedot (Authorization: Basic asfkjsafdjsajflkasj)
if( isset($_SERVER['PHP_AUTH_USER']) ){
    if(checkUser(createDbConnection(), $_SERVER['PHP_AUTH_USER'],$_SERVER["PHP_AUTH_PW"] )){
        $_SESSION["user"] = $_SERVER['PHP_AUTH_USER'];

        //{ "info":"kirjauduit sisään"} 
        //json_encode( array("info"=>"(Kirjauduit sisään") );

        echo '{"info":"kirjauduit sisään"}';
        header('Content-Type: application/json');
        exit;
    }
}

//Ilmoitetaan käyttäjälle, että kirjaudupa sisään (avaa selaimessa login ikkunan)
/* header('WWW-Authenticate: Basic'); */

/* käyttäjälle unauhtorized-otsikko */
echo '{"info":"Failed to login"}';
        header('Content-Type: application/json');
echo "error";
header('HTTP/1.1 401');
exit;

//creatUser(getDbConnection(), "Kalle", "Koodari", "kallekoo", "vekkuli123");
//creatUser(getDbConnection(), "Meija", "Mahtava", "meijuli", "oamk");

// if( checkUser(getDbConnection(), "meijuli", "oamk") ){
//     $_SESSION["user"] = "meijuli";
//     echo "Oikea salasana!";
// }else{
//     echo "Väärä salasana";
// }

?>