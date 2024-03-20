<?php

    session_start();
    include "Class.php";

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:seat.php");
    }
    else if($page=="Next")
    {
        //$payment = new Payment($_SESSION['customer']->GetPackage()->GetPrice() , $_POST['paymenttype'] , $_POST['paymentMethod']);

        //$_SESSION['customer']->SetPayment($payment);

        echo $_POST['paymenttype'];
        echo $_POST['paymentMethod'];

        header("location:validate.php");
    }
?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <style>
            input[type="radio"]{
                display: none;
            }

        </style>
    </head>
    
    <form action="payment.php" method="post">
    <div class="pcont">
        <h3> 1. Choose your payment type </h3>
        <div class="wrapper">
            <input type="radio" name="paymenttype" id="option-1" value="online">
            <input type="radio" name="paymenttype" id="option-2" value="paylater">
            <label for="option-1" class="option option-1">
                <div class="dot"></div>
                <span>Pay in full online</span>
            </label>
            <label for="option-2" class="option option-2">
                <div class="dot"></div>
                <span>Book now and pay later</span>
            </label>
        </div>
    </div>

    <br><br>

    <div class="pcont">
        <h3> 2. Choose your payment method </h3>
        <div class="wrapper">
        <form action="validate.php">
            <label for="paymentMtd">Payment:</label>
            <select name="paymentMethod" id="paymentMethod">
                <option value="visa">Visa Card</option>
                <option value="master">Master Card</option>
                <option value="paypal">Paypal</option>
                <option value="touchNGo">Touch N' Go</option>
                <option value="cash">Cash</option>
                <option value="cash">Other</option>
            </select>
        </form>
    </div>

    <br><br>

    <div class="pcont">
        <h3> 3. Payment details </h3>
        <div class="wrapper">
            <ul>
                <label for="packageID">Package ID: </label>
                <br><br>
                <label for="displayPackageDetails">Package Details: </label>
                <br><br>
                <label for="totalPrice">Total Price: </label>
            </ul>
    </div>

<!-- Previous Code Template - Please delete if not used.
    <div class="pcont">
        <div class="wrapper" id="1">
        <div class="dot"></div>
            <p>Method 1</p>
            <input type="radio" name="paymentType" id="payment" value="payNow"><br>
            <label for = "option-1" class="radio">Pay in full online</label>
        </div>
        </div>

        <div class="space"></div>
        
        <div class="wrapper" id="2">
        <div class="dot"></div>
            <p>Method 2</p>
            <input type="radio" name="paymentType" id="payment" value="payLater"><br>
            <label for = "option-2" class="radio">Book now and pay later</label>
        </div>
        </div>
    </div>
-->

        <div class="cont2">
            
                <form action="payment.php" method="post">
                    <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
                    <input type="submit" name="action" id="Next" value="Next" onclick="send()">
                </form>
            </form>
        </div>
    </body>

</html>
