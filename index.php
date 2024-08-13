<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Angka</title>
</head>
<body>
    <h2>Penjumlahan Dua Angka</h2>
    <form method="post">
        <label for="angka1">Angka Pertama:</label>
        <input type="number" id="angka1" name="angka1" required>
        <br><br>
        <label for="angka2">Angka Kedua:</label>
        <input type="number" id="angka2" name="angka2" required>
        <br><br>
        <input type="submit" name="submit" value="Jumlahkan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $hasil = $angka1 + $angka2;

        echo "<h3>Hasil Penjumlahan: $hasil</h3>";
    }
    ?>
</body>
</html>
