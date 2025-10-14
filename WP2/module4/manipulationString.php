<?php
include('../header.php');
include('../menu.php');
?>
<div id="container">
    <h1 style="text-align:center">Trying String Manipulation Functions</h1>
    <?php
    $sentences = "Learn Programming in IT&B";
    $example = "  Hello World!  ";

    echo "<b>Original String:</b> $sentences<br><br>";

    echo "Counting Number of Characters: " . strlen($sentences) . "<br>";
    echo "Counting Word Count: " . str_word_count($sentences) . "<br>";
    echo "Reversing String: " . strrev($sentences) . "<br>";
    echo "Replacing 'world' with 'student' in 'hello world': " . str_replace("world", "student", "hello world") . "<br>";
    echo "Replacing the word 'Learn' with 'Tutorial': " . str_replace("Learn", "Tutorial", $sentences) . "<br><br>";

    echo "<h3>More String Manipulation Examples</h3>";

    echo "Uppercase: " . strtoupper($sentences) . "<br>";
    echo "Lowercase: " . strtolower($sentences) . "<br>";
    echo "Uppercase first letter: " . ucfirst(strtolower($sentences)) . "<br>";
    echo "Uppercase first letter of each word: " . ucwords(strtolower($sentences)) . "<br>";
    echo "Position of 'Programming': " . strpos($sentences, "Programming") . "<br>";
    echo "Extract substring (first 5 chars): " . substr($sentences, 0, 5) . "<br>";
    echo "Trimmed example (before/after): '" . trim($example) . "'<br>";
    echo "Repeat 'PHP ' 3 times: " . str_repeat("PHP ", 3) . "<br>";
    echo "Compare 'Hello' and 'hello' (case-sensitive): " . strcmp("Hello", "hello") . "<br>";
    echo "Compare 'Hello' and 'hello' (case-insensitive): " . strcasecmp("Hello", "hello") . "<br>";

    $words = explode(" ", $sentences);
    echo "Explode into array: ";
    print_r($words);
    echo "<br>";
    echo "Implode back into string: " . implode("-", $words) . "<br>";
    ?>
</div>
<?php
include('../footer.php');
?>
