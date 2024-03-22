<?php

    $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");

    if(isset($_POST['submit']))
    {
        $sql = "INSERT INTO packagetable(packageNum , packageName , packageItem , packagePrice , packageCuisine, recommendedPax)
                VALUES ('A-{$_POST['packageNum']}' , '{$_POST['packageName']}' , '{$_POST['packageItem']}' , '{$_POST['packagePrice']}' , '{$_POST['packageCuisine']}' , '{$_POST['recPax']}')";

        if(!$conn->query($sql))
        {
            echo "<p>Error encountered during insertion</p>";
        }
        else
        {
            echo "<p>Record successfully added</p>";
        }

        
    }

?>

<html>
    <head>
        <style>
            input[type="text"], input[type="number"], select
            {
                margin:10px;
            }

            label, h2
            {
                margin-left: 7px;
            }

            input[type="submit"]
            {
                padding:7px;
                margin: 10px;
            }
        </style>
    </head>

    <body>
        <h2>Create New Package</h2>

        <form action="addPackage.php" method="post">
            <label for="packageNum">Package Number</label>
            <input type="text" name="packageNum" id="" required><br>

            <label for="packageName">Package Name</label>
            <input type="text" name="packageName" id="" required><br>

            <label for="packageItem">Package Item</label>
            <input type="text" name="packageItem" id="" required><br>

            <label for="packagePrice">Package Price</label>
            <input type="number" step="0.01" name="packagePrice" id="" required><br>

            <label for="packageCuisine">Package Cuisine Type</label>
            <select>
                <option value="Chinese Hot Pot">Chinese Hot Pot</option>
                <option value="Malaysian Hot Pot">Malaysian Hot Pot</option>
                <option value="Korean Hot Pot">Korean Hot Pot</option>
                <option value="Thai Hot Pot">Thai Hot Pot</option>
                <option value="Vietnamese Hot Pot">Vietnamese Hot Pot</option>
                <option value="Others">Others</option>
            </select><br>

            <label for="recPax">Recommended Pax</label>
            <input type="number" name="recPax" id="" required><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>