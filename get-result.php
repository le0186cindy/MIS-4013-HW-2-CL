<?php
    include "header.php";
?>

<div class="ms-4">
<h1>Get Result</h1>

<?php
    $message = "Nothing to get";
    $name = "none";
    if (isset($_GET['fname'])) {
        $name = $_GET['fname'];
        if (!empty($_GET['lname'])) {
            $name = $name . " " . $_GET['lname'];
        }
        $message = "Hello there, {$name}!";
    }
?>
<h3><?php echo $message?></h3>
</div>