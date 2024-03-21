<?php

    session_start();
    $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");
    $id = $_GET['id'];

    $sql = "DELETE FROM ordertable WHERE orderID = $id";
    $conn->query($sql);

    header("Location:recentBookings.php");

?>