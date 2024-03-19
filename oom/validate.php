<?php
$page=isset($_GET["action"])?$_GET["action"]:"";

if($page=="Back"){
    header("location:payment.php");
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
                    <td></td>
                </tr>
                <tr>
                    <th>Age: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Gender: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Phone Number: </th>
                    <td></td>
                </tr>
            </table>

            <br>

            <table class="order">
                <tr>
                    <th colspan="2">Order Info</th>
                </tr>    
                <tr>
                    <th>Pax: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Table: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Date: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Time: </th>
                    <td></td>
                </tr>
            </table>

            <br>

            <table class="package">
                <tr>
                    <th colspan="2">Package Info</th>
                </tr>
                <tr>
                    <th>Package Name: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Items: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Price: </th>
                    <td></td>
                </tr>
                <tr>
                    <th>Payment Method: </th>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="cont2">
        <form action="validate.php" method="get">
            <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
            <input type="submit" name="action" id="Confirm" value="Confirm" onclick="send()">
        </form>
    </div>

</html>
