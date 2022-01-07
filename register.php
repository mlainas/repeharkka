<?php
require('headers.php');
require('functions.php');

$json = json_decode(file_get_contents('php://input'));

$username = filter_var($json->username, FILTER_SANITIZE_STRING);;
$password = filter_var($json->password, FILTER_SANITIZE_STRING);
$firstname = filter_var($json->fname, FILTER_SANITIZE_STRING);
$lastname = filter_var($json->lname, FILTER_SANITIZE_STRING);

$db = createDbConnection();

createUser($db, $username, $password, $firstname, $lastname);