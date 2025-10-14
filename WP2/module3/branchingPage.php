<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <?php
    echo "<h1>This is a branching page</h1>";
    $nilai = 50;
    if ($nilai >= 85 and $nilai <= 100) 
    {
        echo "<h2>Predicate: A</h2>";
    }
    elseif ($nilai >= 75) 
    {
        echo "<h2>Predicate: B</h2>";
    }
    elseif ($nilai >= 60) 
    {
        echo "<h2>Predicate: C</h2>";
    }
    elseif ($nilai >= 50) 
    {
        echo "<h2>Predicate: D</h2>";
    }
    elseif ($nilai >= 0) 
    {
        echo "<h2>Predicate: E</h2>";
    }
    else {
        echo "<h2>Invalid Value.</h2>";
    }

    echo "<h1>Implementation Switch case brancing</h1>";
    $rudi = "man";
    switch ($rudi) 
    {
        case "man":
            echo "<h2>Rudi Is A Man</h2>";
            break;
        case "woman":
            echo "<h2>Rudi Is A Woman</h2>";
            break;
        default:
            echo "<h2>I Cannot identify rudi gender</h2>";
            break;
    }
    ?>

    <a href="loopPage.php"><h3>Click To Go To The Next Page</h3></a>
</div>
<?php
include('../footer.php')
?>