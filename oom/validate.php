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
                
                <table class="info">
                    <tr>
                        <th colspan="2">User Info</th>
                    </tr>
                    <tr>
                        <th>Name: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetName(); ?></td>
                    </tr>
                    <tr>
                        <th>Age: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetAge(); ?></td>
                    </tr>
                    <tr>
                        <th>Gender: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetGender(); ?></td>
                    </tr>
                    <tr>
                        <th>Email: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetEmail(); ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetPhoneNum(); ?></td>
                    </tr>
                </table>

                <br>

                <table class="order">
                    <tr>
                        <th colspan="2">Order Info</th>
                    </tr>    
                    <tr>
                        <th>Pax: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetPax(); ?></td>
                    </tr>
                    <tr>
                        <th>Table: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetTable()->GetSeat(); ?></td>
                    </tr>
                    <tr>
                        <th>Date: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetTable()->GetDate(); ?></td>
                    </tr>
                    <tr>
                        <th>Time: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetTable()->GetStartTime(); ?> - <?php echo $_SESSION['customerCounter']->GetTable()->GetEndTime(); ?></td>
                    </tr>
                </table>

                <br>

                <table class="package">
                    <tr>
                        <th colspan="2">Package Info</th>
                    </tr>
                    <tr>
                        <th>Package Name: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetPackage()->GetPackageName(); ?></td>
                    </tr>
                    <tr>
                        <th>Price: </th>
                        <td>RM <?php echo $_SESSION['customerCounter']->GetPackage()->GetPrice(); ?></td>
                    </tr>
                    <tr>
                        <th>Payment Method: </th>
                        <td><?php echo $_SESSION['customerCounter']->GetPayment()->GetPMethod(); ?></td>
                    </tr>
                </table>
        </div>

        <div class="cont2">

                <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
                <input type="submit" name="action" id="Confirm" value="Confirm" onclick="send()">
            </form>
        </div>

    </html>
