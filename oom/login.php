<?php

    include "Class.php";
    session_start();

    $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");

    if($_POST['submit'] == "Submit")
    {
        $result = $conn->query("SELECT * FROM customer WHERE customerName = '{$_POST['username']}'");

        if($result->num_rows == 0)
        {
            header("Location:login.php?error=userdoesnotexist");
            exit();
        }

        $target = $result->fetch_assoc();

        if($target['customerName'] != $_POST['username'] || $target['password'] != $_POST['password'])
        {
            header("Location:login.php?incorrectlogincredentials");
            mysqli_close($conn);
            
            session_unset();
            session_destroy();
            die();
        }
        else
        {
            $_SESSION['customerCounter'] = new Customer($target['customerName'] , $target['customerGender'] , $target['customerAge'] , $target['paxNumber'] , $target['customerPhoneNumber'] , $target['customerEmail'] , $target['cuisineType']);
            header("Location:booking.php");
        }
    }
    else if($_POST['submit'] == "Register")
    {
        header("Location:info.php");
    }

?>

<html>
    <head>
        <style>
            input[type="text"], input[type="password"]
            {
                padding:7px;
                margin:10px;
            }

            label, h2
            {
                margin-left: 7px;
            }

            button
            {
                padding:7px;
                margin-left: 10px;
            }
        </style>
    </head>

    <body>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="">
            <br>
            <label for="username">Password</label><br>
            <input type="password" name="password" id="">
            <br>
            <button type="submit" value="Submit" name="submit">Submit</button>
            <button type="submit" value="Register" name="submit" formnovalidate>Register</button>
        </form>
    </body>
</html>