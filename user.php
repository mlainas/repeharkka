<?php
session_start();
require('headers.php');
require('functions.php');

if(isset($_SESSION["user"])){

    $db = createDbConnection();
    $user = $_SESSION["user"];

    $sql = "SELECT firstname,lastname FROM users WHERE username = '$user'";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($results as $row){
            echo $row["info"]."\n";
        }
    
   
    echo json_encode($results);

    exit;
}

header('HTTP/1.0 401 Unauthorized');

echo "kirjaudu ensin sisään";

exit;