<?php

    include "Class.php";
    session_start();

    $customer = $_SESSION['customer'];

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:payment.php");
    }
    else if($page == "Confirm")
    {
        $_SESSION['confirmedBooking'][$_SESSION['counter']] = $customer;
        $_SESSION['counter'] ++;

        header("Location:recentBookings.php");
    }
?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <h3> Your Order </h3>
        <style>
            th{
                width: 50%;
            }
        </style>
    </head>

    <div class="output">
        <form action="get">
            <table class="info">
                <tr>
                    <th colspan="2">User Info</th>
                </tr>
                <tr>
                    <th>Name: </th>
                    <td><?php echo $customer->GetName(); ?></td>
                </tr>
                <tr>
                    <th>Age: </th>
                    <td><?php echo $customer->GetAge(); ?></td>
                </tr>
                <tr>
                    <th>Gender: </th>
                    <td><?php echo $customer->GetGender(); ?></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><?php echo $customer->GetEmail(); ?></td>
                </tr>
                <tr>
                    <th>Phone Number: </th>
                    <td><?php echo $customer->GetPhoneNum(); ?></td>
                </tr>
            </table>

            <br>

            <table class="order">
                <tr>
                    <th colspan="2">Order Info</th>
                </tr>    
                <tr>
                    <th>Pax: </th>
                    <td><?php echo $customer->GetPax(); ?></td>
                </tr>
                <tr>
                    <th>Table: </th>
                    <td><?php echo $customer->GetTable()->GetSeat(); ?></td>
                </tr>
                <tr>
                    <th>Date: </th>
                    <td><?php echo $customer->GetTable()->GetDate(); ?></td>
                </tr>
                <tr>
                    <th>Time: </th>
                    <td><?php echo $customer->GetTable()->GetStartTime(); ?> - <?php echo $customer->GetTable()->GetEndTime(); ?></td>
                </tr>
            </table>

            <br>

            <table class="package">
                <tr>
                    <th colspan="2">Package Info</th>
                </tr>
                <tr>
                    <th>Package Name: </th>
                    <td><?php echo $customer->GetPackage()->GetPackageName(); ?></td>
                </tr>
                <tr>
                    <th>Price: </th>
                    <td>RM <?php echo $customer->GetPackage()->GetPrice(); ?></td>
                </tr>
                <tr>
                    <th>Payment Method: </th>
                    <td><?php echo $customer->GetPayment()->GetPMethod(); ?></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="cont2">
        <form action="validate.php" method="post">
            <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
            <input type="submit" name="action" id="Confirm" value="Confirm" onclick="send()">
        </form>
    </div>

</html>
