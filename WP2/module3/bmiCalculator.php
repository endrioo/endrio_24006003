<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <?php
    echo "<h1>This is a BMI Calculator page</h1>";

    // ✅ Multidimensional array of people
    $people = [
        ["name" => "Budiman", "height" => 180, "weight" => 80],
        ["name" => "Andi", "height" => 165, "weight" => 60],
        ["name" => "Siti", "height" => 150, "weight" => 45]
    ];

    // ✅ Loop through each person
    foreach ($people as $person) {
        $name = $person["name"];
        $height = $person["height"];
        $weight = $person["weight"];

        echo "Name: $name<br>";
        echo "Height: $height cm<br>";
        echo "Weight: $weight kg<br>";

        // Calculate BMI
        $bmi = $weight / (($height / 100) * ($height / 100));
        echo "BMI: " . number_format($bmi, 2) . "<br>";

        // ✅ Determine BMI category
        if ($bmi < 18.5) {
            echo "$name BMI is Under Weight<br>";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            echo "$name BMI is Normal Weight<br>";
        } elseif ($bmi >= 25 && $bmi < 30) {
            echo "$name BMI is Pre Obesity<br>";
        } elseif ($bmi >= 30 && $bmi < 35) {
            echo "$name BMI is Obesity Class I<br>";
        } elseif ($bmi >= 35 && $bmi < 40) {
            echo "$name BMI is Obesity Class II<br>";
        } else {
            echo "$name BMI is Obesity Class III<br>";
        }

        echo "<br>";
    }
    ?>
</div>
<?php
include('../footer.php');
?>
