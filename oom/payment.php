<?php
$page=isset($_GET["action"])?$_GET["action"]:"";

if($page=="Back"){
    header("location:seat.php");
}else if($page=="Next"){
    header("location:validate.php");
}
?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <h3> Choose your payment method </h3>
    </head>
    
    <div class="pcont">
        <div class="box" id="1">
            <p>Method 1</p>
        </div>

        <div class="space"></div>

        <div class="box" id="2">
            <p>Method 2</p>
        </div>
    </div>

    <div class="cont2">
        <form action="payment.php" method="get">
            <form action="validate.php" method="post">
                <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
                <input type="submit" name="action" id="Next" value="Next" onclick="send()">
            </form>
        </form>
    </div>

</html>
