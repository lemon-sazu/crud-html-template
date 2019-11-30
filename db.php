<?php
$servername = "localhost";
$username = "root";
//maybe your password will like 
//$password = "";
$password = "secret"; // i am using homestead, so my homestead phpmyadmin pass "secret"
$db = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);


// after mysql query use "$conn->close()"