<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        input, textarea { display: block; margin-bottom: 10px; padding: 5px; width: 300px; }
        button { padding: 8px 15px; }
    </style>
</head>
<body>

<h2>Form Biodata</h2>

<form action="preview.php" method="post" enctype="multipart/form-data">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Alamat:</label>
    <textarea name="alamat" rows="3" required></textarea>

    <label>Foto:</label>
    <input type="file" name="foto" accept=".jpg,.jpeg,.png" required>

    <button type="submit" name="kirim">Kirim</button>
</form>

</body>
</html>
