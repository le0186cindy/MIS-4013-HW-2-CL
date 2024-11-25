<?php
    include "header.php";
?>
<html>
    <div class="ms-4">
        <h2>Please fill your information</h2>
        <body>
            <form action="post-result.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname"><br>
                <label for="lname">Last Name</label>
                <input type="text" name="lname"><br>
                <input type="submit" value="Submit">
            </form>
        </body>
    </div>
</html>