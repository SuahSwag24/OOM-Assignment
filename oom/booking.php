<?php

    session_start();
    include "Class.php";

    $page = isset($_GET["action"])?$_GET["action"]:"";

    if($page == "Log Out")
    {
        session_unset();
        session_destroy();
        
        header("location:info.php");
    }

?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
    </head>

    <div class="bookingCont" style="background-color: aquamarine">
        <p><a href="package.php"><b> New Booking </b></a></p>
    </div>
    <br>

    <div class="bookingCont" style="background-color: aquamarine">
        <p><a href="recentBookings.php"><b> View Recent Bookings </b></a></p>
    </div>
    
    <div class="cont2">
        <form action="booking.php" method="get">
            <input type="submit" name="action" id="Back" value="Log Out" onclick="send()" formnovalidate>
        </form>
    </div>

</html>
