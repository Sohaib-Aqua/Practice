<?php

$servername = "localhost";
$username = "root";
$password   =   "";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Change db to "aptech" db
$db =   mysqli_select_db($conn, "aptech");
