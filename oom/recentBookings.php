<?php

    include "Class.php";
    session_start();
    
    function customErrorHandler($errno, $errstr, $errfile, $errline)
    {
        if ($errno === E_WARNING && strpos($errstr, 'Invalid argument supplied for foreach()') !== false) 
        {
            echo "Empty data.\n";
            // You can also log this information to a file or a database
        }
    }

    $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");
    
    set_error_handler("customErrorHandler");
    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("Location:booking.php");
    }
?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
    </head>

    <table>
        <tr>
            <th> Order ID</th>
            <th> Name</th>
            <th> Pax</th>
            <th> Package</th>
            <th> Seat </th>
            <th> Price</th>
            <th> Date</th>
            <th> Status</th>
            <th> Action</th>
        </tr>

        <?php
        
            $sql = "SELECT *
            FROM ordertable o, customer c
            WHERE customerName = '{$_SESSION['customerCounter']->GetName()}'
            AND o.customerID = c.customerID";

            $result = $conn->query($sql);

            while($row = $result->fetch_assoc())
            {

                echo 
                "
                <tr>
                    <td>" . $row['orderID'] . "</td>
                    <td>" . $row['customerName'] . "</td>
                    <td>" . $row['paxNumber'] . "</td>
                    <td>" . $row['packageNum'] . "</td>
                    <td>" . $row['seatNum'] . "</td>
                    <td>" . $row['totalPrice'] . "</td>
                    <td>" . $row['bookingDate'] . "</td>
                    <td>" . $row['bookingStatus'] . "</td>
                    <td><a href=delete.php?id={$row['orderID']}>Delete</a></td>
                </tr>
                ";
            }
        
        ?>

    </table>

    <div class="cont2">
        <form action="recentBookings.php" method="post">
            <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
        </form>
    </div>

</html>
