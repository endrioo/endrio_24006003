<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <h1 style = "text-align:center">Create Function Independently</h1>
    <?php
    function printHelloWorld() 
    {
        echo "Hello World";
    }
    printHelloWorld()
    ?>

    <h1 style = "text-align:center">Create Function With Parameter</h1>
    <?php
    function add($number1, $number2)
    {
        return $number1 + $number2;
    }
    function substract($number1, $number2)
    {
        return $number1 - $number2;
    }
    function multiply($number1, $number2)
    {
        return $number1 * $number2;
    }
    function divide($number1, $number2)
    {
        return $number1 / $number2;
    }
    $number1 = 10;
    $number2 = 2;
    
    echo "Hasil dari " . $number1 . " + " . $number2 . " = " . add($number1, $number2) . "<br>";
    echo "Hasil dari " . $number1 . " - " . $number2 . " = " . substract($number1, $number2) . "<br>";
    echo "Hasil dari " . $number1 . " * " . $number2 . " = " . multiply($number1, $number2) . "<br>";
    echo "Hasil dari " . $number1 . " / " . $number2 . " = " . divide($number1, $number2) . "<br>";
    ?>

    <a href="learningArray.php">Continue Learing Arrays</a>
</div>
<?php
include('../footer.php')
?>