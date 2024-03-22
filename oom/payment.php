<?php

    include "Class.php";
    session_start();

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:seat.php?dateReserve=".date('Y-m-d'));
    }
    else if($page=="Next")
    {
        $payment = new Payment($_SESSION['customerCounter']->GetPackage()->GetPrice() , $_POST['paymenttype'] , $_POST['paymentMethod']);

        $_SESSION['customerCounter']->SetPayment($payment);

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
            <input type="radio" name="paymenttype" id="option-1" value="online" required>
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
                <option value="Visa">Visa Card</option>
                <option value="Master Card">Master Card</option>
                <option value="Paypal">Paypal</option>
                <option value="TouchNGo">Touch N' Go</option>
                <option value="Cash" selected>Cash</option>
                <option value="Other">Other</option>
            </select>
        </form>
    </div>

    <br><br>

        <div class="cont2">
            <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
            <input type="submit" name="action" id="Next" value="Next" onclick="send()">
        </form>
        </div>
    </body>

</html>
