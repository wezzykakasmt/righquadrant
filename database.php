<?php

$servername = "fdb1027.biz.nf";
$username = "4524989_cashflow";
$password = "NUsaibatuh,1998@";
$dbname = "4524989_cashflow";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>