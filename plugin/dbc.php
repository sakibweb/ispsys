<?php

global $dbhost, $dbuser, $dbpass;
$dbhost = "";
$dbuser = "";
$dbpass = "";
$dbname = "";

function OpenCon(){
    global $dbhost, $dbuser, $dbpass;
    $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function ClientCon($dbuser,$dbpass){
    global $dbhost, $dbuser, $dbpass;
    $conn = new mysqli($dbhost, $dbuser, $dbpass);
    return $conn;
}


function DBCon($dbuser,$dbpass, $dbname){
    global $dbhost, $dbuser, $dbpass, $dbname;
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    return $conn;
}


function CloseCon($conn){
    $conn -> close();
}

?>