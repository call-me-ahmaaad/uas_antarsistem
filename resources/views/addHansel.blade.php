<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk</h2>
    <form action="https://kelompok6.doseninformatika.com/api.php" method="post">
        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi"></textarea><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>
        <label for="gambar">URL Gambar:</label><br>
        <input type="text" id="gambar" name="gambar"><br><br>
        <input type="submit" value="Tambah Produk">
    </form>
</body>
</html>
