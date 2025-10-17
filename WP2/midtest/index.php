<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f1f1f1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #2c3e50;
            padding: 25px 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .calculator h2 {
            text-align: center;
            color: white;
            margin-bottom: 50px;
            font-size: 22px;
        }

        .calculator p {
            text-align: center;
            color: #ccc;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .calculator input[type="number"],
        .calculator input[readonly],
        .calculator select {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            font-size: 15px;
            border: none;
            border-radius: 6px;
            box-sizing: border-box;
            height: 50px;
        }

        .row {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .row select {
            width: 70%;
        }

        .row button {
            width: 30%;
            background-color: #e74c3c;
            border: none;
            color: white;
            font-size: 15px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            height: 50px;
        }

        .row button:hover {
            background-color: #c0392b;
        }

        .calculator input[readonly] {
            background-color: #ecf0f1;
            color: #333;
            font-weight: bold;
            text-align: center;
        }

        .calculator input::placeholder {
            color: #aaa;
        }
    </style>
</head>
<body>

<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["operator"];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($op) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case 'x':
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = ($num2 != 0) ? $num1 / $num2 : "Error: ÷0";
                break;
            case '%':
                $result = ($num2 != 0) ? $num1 % $num2 . " " . ($num1 % 2 == 0 ? "Genap" : "Ganjil") : "Error: %0";
                break;
            default:
                $result = "Invalid operator";
        }
    } else {
        $result = "Invalid input";
    }
}
?>

<div class="calculator">
    <h2>KALKULATOR</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Masukkan angka pertama" required value="<?= isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : '' ?>">
        <input type="number" name="num2" placeholder="Masukkan angka kedua" required value="<?= isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : '' ?>">

        <div class="row">
            <select name="operator" required>
                <option value="+" <?= (isset($_POST['operator']) && $_POST['operator'] == '+') ? 'selected' : '' ?>>+</option>
                <option value="-" <?= (isset($_POST['operator']) && $_POST['operator'] == '-') ? 'selected' : '' ?>>-</option>
                <option value="x" <?= (isset($_POST['operator']) && ($_POST['operator'] == 'x' || $_POST['operator'] == '*')) ? 'selected' : '' ?>>x</option>
                <option value="/" <?= (isset($_POST['operator']) && $_POST['operator'] == '/') ? 'selected' : '' ?>>/</option>
                <option value="%" <?= (isset($_POST['operator']) && $_POST['operator'] == '%') ? 'selected' : '' ?>>%</option>
            </select>
            <button type="submit">Hitung</button>
        </div>

        <input type="text" readonly placeholder="Hasil" value="<?= $result ?>">
    </form>
</div>

</body>
</html>
