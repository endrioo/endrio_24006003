<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Preview Biodata</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        img { max-width: 200px; border-radius: 8px; margin-top: 10px; }
        button { padding: 8px 15px; margin-top: 20px; }
        p { margin: 5px 0; }
    </style>
</head>
<body>

<h2>Preview Data</h2>

<?php
if (isset($_POST['kirim'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = $_FILES['foto'];

    // Folder penyimpanan foto (gunakan absolute path)
    $target_dir = __DIR__ . "/uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); // Buat folder jika belum ada
    }

    $target_file = $target_dir . basename($foto["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validasi file
    $allowed = ['jpg', 'jpeg', 'png'];

    if ($foto['error'] !== 0) {
        echo "<p style='color:red;'>Upload error! Code: {$foto['error']}</p>";
    } elseif (!in_array($imageFileType, $allowed)) {
        echo "<p style='color:red;'>Format file tidak didukung. Hanya JPG/PNG yang diperbolehkan.</p>";
    } else {
        if (move_uploaded_file($foto["tmp_name"], $target_file)) {
            echo "<p><b>Nama:</b> $nama</p>";
            echo "<p><b>Email:</b> $email</p>";
            echo "<p><b>Alamat:</b> $alamat</p>";
            echo "<p><b>Foto:</b><br><img src='uploads/".basename($foto["name"])."' alt='Foto'></p>";
        } else {
            echo "<p style='color:red;'>Gagal memindahkan file ke folder uploads.</p>";
        }
    }

} else {
    echo "<p>Data tidak ditemukan.</p>";
}
?>

<form action="upload.php" method="get">
    <button type="submit">Kembali</button>
</form>

</body>
</html>
