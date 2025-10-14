<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <h1 style = "text-align:center">Using PHP Function Math</h1>
    <?php
    $squareRoot = sqrt(49);
    $rank = pow(12, 2);
    $maximum = max(2,4,6,8,10);
    $random = rand(100, 100000);
    echo "The square Root of 49 is " . $squareRoot . "<br>";
    echo "The square Root of 12 is " . $rank . "<br>";
    echo "The maximum value of 2,4,6,8,10 is " . $maximum . "<br>";
    echo "Generate Random Value with Rand() function, namely " . $random . "<br>";

    echo 'For a more complete implementation of Math Functions, please click this link: 
    <a href="https://www.w3schools.com/php/php_ref_math.asp" target="_blank">Learn Math Functions from the W3Schools website</a><br>';

    echo 'Or on this link: 
    <a href="https://www.php.net/manual/en/ref.math.php" target="_blank">Learn Math Functions from the PHP website</a><br><br>';

    echo 'Click this link to study further material: 
    <a href="privateFunction.php" target="_blank">Study More</a>';
    ?>
</div>
<?php
include('../footer.php')
?>