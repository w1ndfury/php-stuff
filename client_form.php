<?php

require('dbConnection.php');

$name = $_POST ['name'];
$email = $_POST ['email'];
$website = $_POST ['website'];

// Perform query
if($conn -> query ("INSERT INTO `client`(`name`,`email`,`website`) VALUES('$name','$email','$website')"))
    alert("Success!");
else
    console.log("Failed!");


?>