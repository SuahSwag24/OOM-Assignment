<?php

    include "Class.php";
    session_start();

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:booking.php");
    }
    else if($page=="Next")
    {
        $package = new Package($_POST['package']);

        $_SESSION['customerCounter']->SetPackage($package);

        header("location:seat.php?dateReserve=".date('Y-m-d'));
    }


?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <h3>Package Info</h3>
    </head>

        <form action="package.php" method="post">
            <table>
                <tr>
                    <th colspan="6"><label for="menu">Hotpot Cuisine Menu:</label></th>
                </tr>
                <!--<tr>
                    <th colspan="3"><label for="type">Package Type:</label></th>
                    <td colspan="3"><input type="radio" name="type" id="family"> Family 
                    <input type="radio" name="type" id="friends"> Friends </td>
                </tr>-->
                <tr>
                    <th>Package No</th>
                    <th>Package Name</th>
                    <th>Package Items</th>
                    <th style="width: 20%;">Package Recommended Pax</th>
                    <th>Package Price</th>
                    <th>Package Image</th>
                </tr>
                <tr>
                    <td><input type="radio" name="package" value="1" required> Package 1 </td>
                    <td> The Cozy Couple </td>
                    <td style="text-align: left;">
                        <ul>
                            <li>150g sliced beef</li>
                            <li>100g sliced lamb</li>
                            <li>150g sliced pork belly</li>
                            <li>8 large prawns</li>
                            <li>10 mussels</li>
                            <li>150g assorted vegetables</li>
                            <li>100g rice noodles</li>
                            <li>100g wheat noodles</li>
                        </ul>
                    </td>
                    <td> 2 </td>
                    <td> RM 90.00 </td>
                    <td> <img src="images/TheCozyCouple.png"> </td>
                </tr>
                <tr>
                    <td><input type="radio" name="package" value="2" required>  Package 2 </td>
                    <td> The Big Party </td>
                    <td style="text-align: left;">
                        <ul>
                            <li>300g sliced beef</li>
                            <li>200g sliced lamb</li>
                            <li>250g sliced pork</li>
                            <li>200g sliced chicken</li>
                            <li>15 large prawns</li>
                            <li>15 mussels</li>
                            <li>12 scallops</li>
                            <li>250g squid rings</li>
                            <li>200g white fish fillets</li>
                            <li>250g assorted vegetables</li>
                            <li>200g rice noodles</li>
                            <li>200g wheat noodles</li>
                            <li>2 pots of steamed rice</li>
                            </ul>
                    </td>
                    <td> 5 - 6 </td>
                    <td> RM 220.00 </td>
                    <td> <img src="images/TheBigParty.png"> </td>
                </tr>
                <tr>
                    <td><input type="radio" name="package" value="3" required>  Package 3 </td>
                    <td> The Ultimate Feast </td>
                    <td style="text-align: left;">
                        <ul>
                            <li>400g sliced beef</li>
                            <li>250g sliced lamb</li>
                            <li>300g sliced pork</li>
                            <li>250g sliced chicken</li>
                            <li>20 large prawns</li>
                            <li>20 mussels</li>
                            <li>15 scallops</li>
                            <li>300g squid rings</li>
                            <li>250g white fish fillets</li>
                            <li>300g assorted vegetables</li>
                            <li>250g rice noodles</li>
                            <li>240g wheat noodles</li>
                            <li>3 pots of steamed rice</li>
                        </ul>
                    </td>
                    <td> 7 - 8 </td>
                    <td> RM 350.00 </td>
                    <td> <img src="images/TheUltimateFeast.png"> </td>
                </tr>
                <tr>
                    <td colspan="6">
                        <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
                        <input type="submit" name="action" id="Next" value="Next" onclick="send()">
                    </td>
                </tr>
            </table>
    </form>

</html>
