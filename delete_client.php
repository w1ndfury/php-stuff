<?php

require('dbConnection.php');

$id=$_POST['delete_id'];   // from ajax call in get_all_clients.php
// Perform query

$sql = "DELETE FROM `client` WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    console.log("Delete Success");
} 
else {
    console.log("Delete Failed");
}
?>