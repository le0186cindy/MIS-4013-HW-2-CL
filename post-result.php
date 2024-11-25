<?php
    include "header.php";
?>
<div class="ms-4">
<h1>Post Result</h1>

<?php
    $message = "Nothing is posted";
    $name = "none";
    if (isset($_POST['fname'])) {
        $name = $_POST['fname'];
        if (!empty($_POST['lname'])) {
            $name = $name . " " . $_POST['lname'];
        }
        $message = "Hello there, {$name}!";
    }
?>
<h3><?php echo $message?></h3>
</div>