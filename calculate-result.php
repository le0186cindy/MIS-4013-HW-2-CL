<?php
    include "header.php";
?>

<div class="ms-4">
<h1>Get Result</h1>

<?php
    function calculate($num1, $sign, $num2) {
        $sum = 0;
        if ($sign == "plus") {
            $sum = $num1 + $num2;
        } else if ($sign == "minus") {
            $sum = $num1 - $num2;
        }
        echo $sum;
    }
?>
<h3>Your result is <?php echo calculate($_GET['num1'], $_GET['sign'], $_GET['num2'])?></h3>
</div>