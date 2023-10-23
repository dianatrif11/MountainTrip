<?php 

$server = "localhost";
$user = "mountaintrip_db";
$pass = ".&.UWU~Mh?-M";
$database = "mountaintrip_db";
session_start();
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

/*$server = "localhost";
$user = "root";
$pass = "";
$database = "mountaintrip_db";

session_start();
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}*/
//inainte de cpanel decomentez partea de sus si comentez partea de jos
?>
