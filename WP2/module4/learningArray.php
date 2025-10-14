<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <h1 style = "text-align:center">Learning Array</h1>
    <?php
    $regularArray = array(1,2,3,4,5);
    $arrayWithKey = array(
        1 => "PHP",
        2 => "MySQL",
        3 => "Java",
    );
    echo "<h2>Regular Array Looping</h2>";
    for($i = 0; $i < count($regularArray); $i++) 
    {
        echo "the content of the regular item array are: $regularArray[$i] <br>";
    }
    echo "<h2>Array Looping With Key</h2>";
    foreach($arrayWithKey as $arrItem) 
    {
        echo "the contents of the item array are: $arrItem <br>";
    }
    ?>
    <h2>Multi Array Implementation</h2>
    <?php
        $cars = array(
            array("Valvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        echo $cars[0][0] . ": In Stock: " . $cars[0][1] . " Sold : " . $cars[0][2] . "<br>";
        echo $cars[1][0] . ": In Stock: " . $cars[1][1] . " Sold : " . $cars[1][2] . "<br>";
        echo $cars[2][0] . ": In Stock: " . $cars[2][1] . " Sold : " . $cars[2][2] . "<br>";
        echo $cars[3][0] . ": In Stock: " . $cars[3][1] . " Sold : " . $cars[3][2] . "<br>";
    ?>

    <a href="manipulationString.php">Continue Learing Manipulation String</a>
</div>
<?php
include('../footer.php')
?>