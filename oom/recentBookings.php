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

    set_error_handler("customErrorHandler");


    $page=isset($_GET["action"])?$_GET["action"]:"";

    if($page=="Back")
    {
        header("location:booking.php");
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
            <th> Name</th>
            <th> Pax</th>
            <th> Package</th>
            <th> Seat </th>
            <th> Price</th>
            <th> Status</th>
        </tr>

        <?php
        
            foreach($_SESSION['confirmedBooking'] as $customer)
            {

                

                echo 
                "
                <tr>
                    <td>" . $customer->GetName() . " </td>
                    <td>" . $customer->GetPax() . "</td>
                    <td>" . $customer->GetPackage()->GetPackageNum() . "</td>
                    <td>" . $customer->GetTable()->GetSeat() . "</td>
                    <td>" . $customer->GetPackage()->GetPrice() . "</td>
                    <td>" . $customer->GetTable()->GetStatus() . "</td>
                </tr>
                ";
            }

           
        
        ?>

    </table>

    <div class="cont2">
        <form action="recentBookings.php" method="get">
            <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
        </form>
    </div>

</html>
