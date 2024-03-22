<?php
    include "Class.php";
    session_start();

    if (!isset($_SESSION['counter'])) 
    {
        $_SESSION['counter'] = 0;
    }

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:payment.php");
    }
    else if($page == "Confirm")
    {
        $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");
        $result =  $conn->query("SELECT * FROM customer WHERE customerName = '{$_SESSION['customerCounter']->GetName()}'");
        $target = $result->fetch_assoc();

        if($_SESSION['customerCounter']->GetName() == $target['customerName'])
        {

        }
        else
        {
            $sql = "INSERT INTO customer (customerName , customerGender , customerAge , paxNumber , customerPhoneNumber , customerEmail)
            VALUES ('{$_SESSION['customerCounter']->GetName()}' , '{$_SESSION['customerCounter']->GetGender()}' , '{$_SESSION['customerCounter']->GetAge()}' , '{$_SESSION['customerCounter']->GetPax()}' , '{$_SESSION['customerCounter']->GetPhoneNum()}' , '{$_SESSION['customerCounter']->GetEmail()}')";

            $conn->query($sql);
        }

        $result =  $conn->query("SELECT * FROM customer WHERE customerName = '{$_SESSION['customerCounter']->GetName()}'");
        $target = $result->fetch_assoc();
        $currentUser = $target['customerID'];

        $sql =  "INSERT INTO ordertable (customerID , packageNum , seatNum , totalPrice , bookingStatus , bookingDate , bookingStartTime , bookingEndTime)
                VALUES ('$currentUser' , '{$_SESSION['customerCounter']->GetPackage()->GetPackageNum()}' , '{$_SESSION['customerCounter']->GetTable()->GetSeat()}' , '{$_SESSION['customerCounter']->GetPackage()->GetPrice()}' , '{$_SESSION['customerCounter']->GetTable()->GetStatus()}' , '{$_SESSION['customerCounter']->GetTable()->GetDate()}' , '{$_SESSION['customerCounter']->GetTable()->GetStartTime()}' , '{$_SESSION['customerCounter']->GetTable()->GetEndTime()}')";
                
        $conn->query($sql);

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
        <form action="validate.php" method="post">
                <?php   $_SESSION['customerCounter']->DisplayFullInfo();    ?>
        </div>

        <center><p><strong>Your booking will be pending for confirmation. The system will notify the booking confirmation via phone message or E-mail. Thank you.</strong></p></center>
        <br>

        <div class="cont2">
        <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
        <input type="submit" name="action" id="Confirm" value="Confirm" onclick="send()">
            </form>
        </div>

        

    </html>
