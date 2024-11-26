<?php
    include "header.php";
?>
<html>
    <div class="ms-4">
        <h2>Get a link to greet your name!</h2>
        <body>
            <form action="get-result.php" method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname"><br>
                <label for="lname">Last Name</label>
                <input type="text" name="lname"><br>
                <input type="submit" value="Submit">
            </form>

            <form action="calculate-result.php" method="GET">
                <input type="number" name="num1">
                <select name="sign">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                </select>
                <input type="number" name="num2">
                <input type="submit" value="Submit">
            </form>
        </body>
    </div>
</html>