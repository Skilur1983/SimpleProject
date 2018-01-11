<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'methods.php';
require_once 'login.php';

$db_link = new mysqli($db_hostname, $db_user, $db_password, $db_database);
// print_r($db_link);
if(!$db_link->connect_errno){
    println("Success");
} else{
    die("No connection");
}

// printf("Host info: %s\n", mysqli_get_host_info($db_link));

$query = "SELECT * FROM mysql.accounts WHERE `number`=12345";
$result = $db_link->query($query);


while ($row = $result->fetch_array(MYSQLI_NUM)){
    print_r($row);
}

println(md5('CoolPass'));
println(sha1('BetterPass'));