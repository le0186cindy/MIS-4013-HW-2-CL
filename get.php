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
        </body>
    </div>
</html>