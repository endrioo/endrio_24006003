<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Kafe</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 60%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        input[type=number] { width: 60px; text-align: center; }
        h2 { margin-top: 40px; }
        .total { font-weight: bold; background-color: #eee; }
    </style>
</head>
<body>

<h2>Menu Kafe</h2>
<form method="post">
    <table>
        <tr>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php
        $menu = [
            "Kopi Hitam" => 10000,
            "Cappuccino" => 15000,
            "Teh Manis" => 8000,
            "Es Jeruk" => 8000,
            "Nasi Goreng" => 20000,
            "Mie Goreng" => 18000
        ];

        foreach ($menu as $nama => $harga) {
            echo "<tr>
                    <td>$nama</td>
                    <td>Rp" . number_format($harga, 0, ',', '.') . "</td>
                    <td><input type='number' name='jumlah[$nama]' value='0' min='0'></td>
                  </tr>";
        }
        ?>
    </table>
    <button type="submit" name="pesan">Pesan</button>
</form>

<?php
if (isset($_POST['pesan'])) {
    $jumlah = $_POST['jumlah'];
    $total = 0;

    echo "<h2>Detail Pesanan</h2>";
    echo "<table>
            <tr>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>";

    foreach ($menu as $nama => $harga) {
        $jml = (int)$jumlah[$nama];
        if ($jml > 0) {
            $subtotal = $harga * $jml;
            $total += $subtotal;
            echo "<tr>
                    <td>$nama</td>
                    <td>$jml</td>
                    <td>Rp" . number_format($harga, 0, ',', '.') . "</td>
                    <td>Rp" . number_format($subtotal, 0, ',', '.') . "</td>
                  </tr>";
        }
    }

    echo "<tr class='total'>
            <td colspan='3'>Total</td>
            <td>Rp" . number_format($total, 0, ',', '.') . "</td>
          </tr>";
    echo "</table>";
}
?>

</body>
</html>
