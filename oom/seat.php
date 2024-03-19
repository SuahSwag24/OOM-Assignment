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
        <h2><u>Filter</u></h2>
        <form action="action_page.php">
                <h3>Tables Selected: </h3>
                <!-- linkage code required --> 

                <h3>Package Selected: </h3>
                <!-- linkage code required --> 

                <h3>Time: </h3>
                <h4> From <input type="time" id="timeReserve" name="timeReserve"> </h4>
                <h4> To <input type="time" id="timeReserve" name="timeReserve"> </h4>
                
                <h3>Date: </h3>
                <input type="date" id="dateReserve" name="dateReserve">
                <br><br>
                <input type="submit" name="action" value="Submit" onclick="submit()" >
                <input type="reset" name="action" value="Reset" onclick="reset()" >
        </form>
        </div>


        <div class="right">
            <div class = "showcase">
                <tr>
                    <br>
                    <div class = "IconSeat4 red"></div>
                    <medium><b>4 PAX Seat Arragement Tables: T1 | T2 | T3 | T6 | T7 | T8 | T11 | T12 | T13</b></medium>
                </tr>
            </div>
            <div class = "showcase">
                <tr>
                    <div class = "IconSeat6 blue"></div>
                    <medium><b>6 PAX Seat Arragement Tables: T4 | T5 | T9 | T10 </b></medium>
                    <br>
                </tr>
            </div>
            <div class="right1">
                <div class="seat4">
                    <!-- JavaScript or PHP to connect onCLick checkbox function for all 13 tables is required -->
                    <input type="checkbox" name="table1" value="1" id="t1" onclick="myFunction()"/>
                    <label class="checkbox-alias" for="t1"><br><br><br><br>T1</label>
                    
                    <input type="checkbox" name="table2" value="2" id="t2"/>
                    <label class="checkbox-alias" for="t2"><br><br><br><br>T2</label>
                    
                    <input type="checkbox" name="table2" value="3" id="t3"/>
                    <label class="checkbox-alias" for="t3"><br><br><br><br>T3</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat6">
                    <br><br><br><br><br>
                    <input type="checkbox" name="table4" value="4" id="t4"/>
                    <label class="checkbox-alias" for="t4"><br><br><br><br>T4</label>
                    
                    <input type="checkbox" name="table5" value="5" id="t5"/>
                    <label class="checkbox-alias" for="t5"><br><br><br><br>T5</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat4">
                    <input type="checkbox" name="table6" value="6" id="t6"/>
                    <label class="checkbox-alias" for="t6"><br><br><br><br>T6</label>
                    
                    <input type="checkbox" name="table7" value="7" id="t7"/>
                    <label class="checkbox-alias" for="t7"><br><br><br><br>T7</label>
                    
                    <input type="checkbox" name="table8" value="8" id="t8"/>
                    <label class="checkbox-alias" for="t8"><br><br><br><br>T8</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat6">
                    <br><br><br><br><br>
                    <input type="checkbox" name="table9" value="9" id="t9"/>
                    <label class="checkbox-alias" for="t9"><br><br><br><br>T9</label>
                    
                    <input type="checkbox" name="table10" value="10" id="t10"/>
                    <label class="checkbox-alias" for="t10"><br><br><br><br>T10</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat4">
                    <input type="checkbox" name="table11" value="11" id="t11"/>
                    <label class="checkbox-alias" for="t11"><br><br><br><br>T11</label>
                    
                    <input type="checkbox" name="table12" value="12" id="t12"/>
                    <label class="checkbox-alias" for="t12"><br><br><br><br>T12</label>
                    
                    <input type="checkbox" name="table13" value="13" id="t13"/>
                    <label class="checkbox-alias" for="t13"><br><br><br><br>T13</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Previous look of HTML utilizing container. Latest one is made with checkbox above. 
        <div class="right">
            <div class = "showcase">
                <tr>
                    <div class = "IconSeat4 red"></div>
                    <medium><b>Red-Coloured Tables: 4 seats</b></medium>
                </tr>
            </div>
            <div class = "showcase">
                <tr>
                    <div class = "IconSeat6 yellow"></div>
                    <medium><b>Blue-Coloured Tables: 6 seats</b></medium>
                </tr>
            </div>
            <div class="right1">
                <div class="seat4"><label for="seatNo">T1</label></div>
                <div class="seat4"><label for="seatNo">T2</label></div>
                <div class="seat4 occupied"><label for="seatNo">T3</label></div>
            </div>
            <div class="right1">
                <div class="seat6"><label for="seatNo">T4</label></div>
                <div class="seat6"><label for="seatNo">T5</label></div>
            </div>
            <div class="right1">
                <div class="seat4"><label for="seatNo">T6</label></div>
                <div class="seat4"><label for="seatNo">T7</label></div>
                <div class="seat4 occupied"><label for="seatNo">T8</label></div>
            </div>
            <div class="right1">
                <div class="seat6"><label for="seatNo">T9</label></div>
                <div class="seat6"><label for="seatNo">T10</label></div>
            </div>
            <div class="right1">
                <div class="seat4"><label for="seatNo">T11</label></div>
                <div class="seat4"><label for="seatNo">T12</label></div>
                <div class="seat4"><label for="seatNo">T13</label></div>
            </div>
        </div>
    -->
    
    <div class="cont2">
        <form action="seat.php" method="get">
            <form action="validate.php" method="post">
                <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>    
                <input type="submit" name="action" id="Next" value="Next" onclick="send()">
            </form>
        </form>
    </div>
    <script src="seat.js"></script>
</html>
