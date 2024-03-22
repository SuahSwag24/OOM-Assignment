<?php

    session_start();
    include "Class.php";
    
    $url = "booking.php";

    if($_POST['submit'] == "Login")
    {
        header("Location:login.php");
    }
    else if(isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");

        $result = $conn->query("SELECT * FROM customer WHERE customerName = '{$_POST['name']}'");

        if($result->num_rows > 0)
        {
            header("Location:info.php?error=nameused");
            exit();
        }
        else
        {
            $_SESSION['customerCounter'] = new Customer($_POST['name'] , $_POST['gender'] , $_POST['age'] , "" , $_POST['phone'] , $_POST['email']);
            $conn->query    ("INSERT INTO customer(customerName , password , customerGender , customerAge , customerPhoneNumber , customerEmail)
                            VALUES ('{$_POST['name']}' , '{$_POST['password']}' , '{$_POST['gender']}' , '{$_POST['age']}' , '{$_POST['phone']}' , '{$_POST['email']}')");

            header("Location:booking.php");
        }   
    }

?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
    </head>
    <div class="form">
    <form action="info.php" method="post">
        <center><h2>Register</h2></center>
        <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" name="name" placeholder="Enter Name..." required></td>
                </tr>
                <tr>
                    <th><label for="password">Password:</label></th>
                    <td><input type="password" name="password" placeholder="Enter Password..." required></td>
                </tr>
                <tr>
                    <th><label for="age">Age:</label></th>   
                    <td><input type="number" name="age" min="1" placeholder="Enter Age..." required></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender:</label></th>
                    <td><input type="radio" name="gender" value="male" required>Male <input type="radio" name="gender" value="female" required>Female</td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><input type="text" name="email" placeholder="Enter Email..." required></td>
                </tr>
                <tr>
                    <th><label for="phone">Phone Number:</label></th>
                    <td><input type="text" name="phone" placeholder="Enter Phone Number..." required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" id="Submit" value="Proceed" name="submit"></td>
                </tr>
        </table>
        <input type="submit" name="submit" value="Login" formnovalidate></input>
    </form>

    <?php
    
        if($_GET['error'] == "nameused")
        {
            echo "<center><p style = color:red>Username is used</p></center>";
        }
    
    ?>
    </div>
</html>
