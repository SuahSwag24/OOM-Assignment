<?php

    session_start();
    include "Class.php";
    
    $url = "booking.php";

    if(isset($_POST['submit']))
    {
        $customer = new Customer($_POST['name'] , $_POST['gender'] , $_POST['age'] , $_POST['pax'] , $_POST['phone'] , $_POST['email']);
        $_SESSION['customer'] = $customer;

        $_SESSION['id'] = "123";

        header('Location: ' . $url);
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
        <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" name="name" placeholder="Enter Name..." required></td>
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
    </form>
    </div>
</html>
