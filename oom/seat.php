<?php
    include "Class.php";
    session_start();

    $conn = mysqli_connect("localhost" , "root" , "" , "hotpotdatabase");

    $page=isset($_POST["action"])?$_POST["action"]:"";

    if($page=="Back")
    {
        header("location:package.php");
    }
    else if($page=="Next")
    {
        if(isset($_POST['table']))
        {
            $seat = new Table(implode("," , $_POST['table']) , $_POST['timeStart'], $_POST['timeEnd'], $_POST['dateReserve']);
            $_SESSION['customerCounter']->SetTable($seat);
            $_SESSION['customerCounter']->SetPax($_POST['pax']);

            header("location:payment.php");
        }
        else
        {
            header("location:seat.php?dateReserve=".date('Y-m-d') . "&error=notselected");
        }
    }

?>

<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
        <h3> Choose your seat </h3>

        <script>
            function updateDate() 
            {
                var selectedDate = document.getElementById("dateReserve").value;
                localStorage.setItem("selectedDate", selectedDate);
                var url = "seat.php?dateReserve=" + selectedDate;
                window.location = url;
            }
            window.onload = function() 
            {
                var savedDate = localStorage.getItem("selectedDate");
                if (savedDate) 
                {
                    document.getElementById("dateReserve").value = savedDate;
                }
            };
        </script>
    </head>

<body>
    <div class="cont">
        <link rel="stylesheet" href="seating.css">

        <div class="left">
            <h2><u>Selection</u></h2>
            <form id="select" action="seat.php" method="post">
                <h3>
                    <label for="pax">Pax:</label>
                    <input type="number" name="pax" min="1" style="width:60%; border:1px solid black; text-align:center;"
                           placeholder="Enter Number of People..." required>
                </h3>
                <h3>Time:</h3>
                <h4>From <input type="time" id="timeReserve" name="timeStart" min="10:00:00" max="20:00:00" required></h4>
                <h4>To <input type="time" id="timeReserve" name="timeEnd" min="10:00:00" max="20:00:00" required></h4>

                <h3>Date:</h3>
                <input type="date" id="dateReserve" name="dateReserve" min="<?php echo date('Y-m-d')?>" max="<?php echo date('Y-m-d', strtotime('+72 hours')) ?>" onchange="updateDate()">
                <br><br>
                <input type="submit" name="action" id="Next" value="Next" onclick="send()" required>
                <br>
                <input type="reset" name="action" value="Reset" onclick="reset()">
                <br><br>
                <input type="submit" name="action" id="Back" value="Back" onclick="send()" formnovalidate>
        </div>

        <div class="right">
            <div class="showcase">
                <tr>
                    <br>
                    <div class="IconSeat4 red"></div>
                    <medium><b>4 PAX Seat Arrangement Tables: T1 | T2 | T3 | T6 | T7 | T8 | T11 | T12 | T13</b></medium>
                </tr>
            </div>
            <div class="showcase">
                <tr>
                    <div class="IconSeat6 blue"></div>
                    <medium><b>6 PAX Seat Arrangement Tables: T4 | T5 | T9 | T10 </b></medium>
                    <br>
                </tr>
            </div>
            <div class="right1">
                <div class="seat4">
                    <input type="checkbox" name="table[]" value="1" id="t1" onclick="myFunction()"/>
                    <label class="checkbox-alias" id="label1" for="t1"><br><br><br><br>T1</label>

                    <input type="checkbox" name="table[]" value="2" id="t2"/>
                    <label class="checkbox-alias" id="label2" for="t2"><br><br><br><br>T2</label>

                    <input type="checkbox" name="table[]" value="3" id="t3"/>
                    <label class="checkbox-alias" for="t3" id="label3"><br><br><br><br>T3</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat6">
                    <br><br><br><br><br>
                    <input type="checkbox" name="table[]" value="4" id="t4"/>
                    <label class="checkbox-alias" for="t4" id="label4"><br><br><br><br>T4</label>
                    
                    <input type="checkbox" name="table[]" value="5" id="t5"/>
                    <label class="checkbox-alias" for="t5" id="label5"><br><br><br><br>T5</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat4">
                    <input type="checkbox" name="table[]" value="6" id="t6"/>
                    <label class="checkbox-alias" for="t6" id="label6"><br><br><br><br>T6</label>
                    
                    <input type="checkbox" name="table[]" value="7" id="t7"/>
                    <label class="checkbox-alias" for="t7" id="label7"><br><br><br><br>T7</label>
                    
                    <input type="checkbox" name="table[]" value="8" id="t8"/>
                    <label class="checkbox-alias" for="t8" id="label8"><br><br><br><br>T8</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat6">
                    <br><br><br><br><br>
                    <input type="checkbox" name="table[]" value="9" id="t9"/>
                    <label class="checkbox-alias" for="t9" id="label9"><br><br><br><br>T9</label>
                    
                    <input type="checkbox" name="table[]" value="10" id="t10"/>
                    <label class="checkbox-alias" for="t10" id="label10"><br><br><br><br>T10</label>
                </div>
            </div>
            <div class="right1">
                <div class="seat4">
                    <input type="checkbox" name="table[]" value="11" id="t11"/>
                    <label class="checkbox-alias" for="t11" id="label1"><br><br><br><br>T11</label>
                    
                    <input type="checkbox" name="table[]" value="12" id="t12"/>
                    <label class="checkbox-alias" for="t12" id="label12"><br><br><br><br>T12</label>
                    
                    <input type="checkbox" name="table[]" value="13" id="t13"/>
                    <label class="checkbox-alias" for="t13" id="label13"><br><br><br><br>T13</label>
                </div>
            </div>
        </div>
    </div>
    </form>
        </form>

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

    </div>
    <script src="seat.js"></script>
    
</html>

<?php

    if($_GET['error'] === "notselected")
    {
        echo "<p style=color:red>Tables not selected.</p>";
    }

    $sql = "SELECT * FROM ordertable WHERE bookingDate = '{$_GET['dateReserve']}'";
    $result = $conn->query($sql);

    if($result !== false && $result->num_rows > 0)
    {
        echo "<script>";
        while($row = $result->fetch_assoc())
        {
            $bookedSeats = $row['seatNum'];
            if($bookedSeats)
            {
                $array = explode("," , $bookedSeats);
                foreach($array as $b)
                {
                    
                    echo "
                            var isDisabled = document.getElementById('t" . $b . "').disabled;
                            document.getElementById('label$b').style.backgroundColor = 'red';
                    ";
                    
                }
                
            }
        }
        echo "</script>";
    }
    else
    {
        echo "No seats booked yet";
    }

    
?>
