<?php
$con = mysqli_connect("localhost", "root", "", "tubes2_223040003");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
