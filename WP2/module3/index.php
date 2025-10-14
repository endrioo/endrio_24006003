<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <center>
        <?php
        $firstName = "Andi";
        $lastName = "Yang";
        $degree = "S. Kom., M.Kom";
        echo "<h1>Hello World, This is My First PHP Website</h1>";
        echo "<h2>Welcome Bro </h2>" . $firstName . " " . $lastName . ", " . $degree . "</h2>";
        ?>
    </center>

    <?php
    echo "<h1>Arithmetic Implementation in PHP</h1>";
    $a = 1 + 1;
    $b = 5 - 2.5;
    $c = 5*5;
    $d = 8/2;
    $e = 10/6;

    echo "<h2>Calculation Result With PHP</h2>";

    echo "The result 1 + 1 is " . $a;
    echo "<br />";
    echo "The result  5 - 2.5 is " . $b;
    echo "<br />";
    echo "The result 5 x 5 is " . $c;
    echo "<br />";
    echo "The result 8 / 2 is " . $d;
    echo "<br />";
    echo "The result 10 / 6 is " . $e;

    echo "<h2>Type of data resulting from the calculation above</h2>";

    echo "The data type of 1 + 1 is ";
    var_dump($a);
    echo "<br />";

    echo "The data type of 5 - 2.5 is ";
    var_dump($b);
    echo "<br />";

    echo "The data type of 5 x 5 is ";
    var_dump($c);
    echo "<br />";

    echo "The data type of 8 / 2 is ";
    var_dump($d);
    echo "<br />";

    echo "The data type of 10 / 6 is ";
    var_dump($e);
    echo "<br />";
    ?>

    <a href="branchingPage.php"><h3>Click To Go To The Next Page</h3></a>
</div>
<?php
include('../footer.php')
?>