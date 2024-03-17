<?php

    include "Class.php";
    session_start();

    $page=isset($_GET["action"])?$_GET["action"]:"";

    if($page=="Back"){
        header("location:package.php");
    }else if($page=="Next"){
        header("location:payment.php");
    }

    $_SESSION['customer']->DisplayCustomerInfo();
    $_SESSION['customer']->GetPackage()->DisplayPackageInfo();

?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <h3> Choose your seat </h3>
    </head>

    <div class="cont">
        <link rel="stylesheet" href="seating.css"> 
        
        <div class="left">
            <h3><u>Filter</u></h3>
            <h3>Tables</h3>
        </div>

        <div class="right">
            <div class="right1">
                <div class="seat4"></div>
                <div class="seat4"></div>
                <div class="seat4"></div>
            </div>
            <div class="right1">
                <div class="seat6"></div>
                <div class="seat6"></div>
            </div>
            <div class="right1">
                <div class="seat4"></div>
                <div class="seat4"></div>
                <div class="seat4"></div>
            </div>
            <div class="right1">
                <div class="seat6"></div>
                <div class="seat6"></div>
            </div>
            <div class="right1">
                <div class="seat4"></div>
                <div class="seat4"></div>
                <div class="seat4"></div>
            </div>
        </div>

    </div>
    
    <div class="cont2">
        <form action="seat.php" method="get">
            <form action="validate.php" method="post">
                <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
                <input type="submit" name="action" id="Next" value="Next" onclick="send()">
            </form>
        </form>
    </div>
</html>
