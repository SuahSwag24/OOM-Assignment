<html>
    <head>
        <title> Hotpot Booking System </title>
        <link rel="stylesheet" href="oom.css">
        <h1>Hotpot Booking System</h1>
    </head>
    <div class="form">
    <form action="package.php" method="post">
        <table>
                <tr>
                    <th><label for="name">Name:</label></th>
                    <td><input type="text" name="name" placeholder="Enter Name..."></td>
                </tr>
                <tr>
                    <th><label for="age">Age:</label></th>
                    <td><input type="number" name="age" min="1" placeholder="Enter Age..."></td>
                </tr>
                <tr>
                    <th><label for="gender">Gender:</label></th>
                    <td><input type="radio" name="age" id="male">Male <input type="radio" name="age" id="female">Female</td>
                </tr>
                <tr>
                    <th><label for="email">Email:</label></th>
                    <td><input type="text" name="email" placeholder="Enter Email..."></td>
                </tr>
                <tr>
                    <th><label for="phone">Phone Number:</label></th>
                    <td><input type="text" name="phone" placeholder="Enter Phone Number..."></td>
                </tr>
                <tr>
                    <th><label for="pax">Pax:</label></th>
                    <td><input type="number" name="pax" min="1" placeholder="Enter Number of People..."></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" id="Submit" value="Proceed"></td>
                </tr>
        </table>
    </form>
    </div>
</html>
