<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <?php
    echo "<h1>This is a Loop page</h1>";
    echo "<h2>There are 3 types of repetition</h2>";
    echo "<h2>1. For Loop:</h2>";
    for ($i = 1; $i <= 5; $i++)
    {
        echo "The For Loop - " . $i . "<br>";
    }

    echo "<h2>2. While Loop:</h2>";
    $i = 0;
    while ($i < 5) 
    {
        echo "The While Loop - " . $i . "<br>";
        $i++;
    }

    echo "<h2>3. ForEach Loop:</h2>";
    $listmahasiswa = ['Nurul huda', 'Wahid Abdullah', 'Elmo Bachtiar'];
    foreach($listmahasiswa as $mahasiswa) 
    {
        echo "Name : " . $mahasiswa . "<br>";
    }

    ?>

    <a href="bmiCalculator.php"><h3>Click To Go To The Next Page</h3></a>
</div>
<?php
include('../footer.php')
?>