<!DOCTYPE html>
<html>
<head>
    <title>Program Kasir</title>
</head>
<body>
    <h1>Program Kasir</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>NAMA BARANG YANG DIBELI :</label>
    <br>-------------------------------------------------------------------------------------<br>
        <label>Barang Pertama <br><br></label>
        <label for="nama_barang">Nama Barang ke-1:</label>
        <input type="text" name="nama_barang" required><br><br>

        <label for="harga_satuan">Harga Satuan :</label>
        <input type="number" name="harga_satuan" min="0" required><br><br>

        <label for="jumlah_beli">Jumlah yang Dibeli:</label>
        <input type="number" name="jumlah_beli" min="0" required><br><br>

        <label for="diskon1">Besar diskon (...%) :</label>
        <input type="number" name="diskon1" min="0"  required><br><br>
        -------------------------------------------------------------------------------------<br>
        <br>Barang Kedua <br><br>

        <label for="nama_barang2">Nama Barang ke-2:</label>
        <input type="text" name="nama_barang2" required><br><br>

        <label for="harga_satuan2">Harga Satuan :</label>
        <input type="number" name="harga_satuan2" min="0" required><br><br>

        <label for="jumlah_beli2">Jumlah yang Dibeli:</label>
        <input type="number" name="jumlah_beli2" min="0" required><br><br>

        <label for="diskon2">Besar diskon (...%) :</label>
        <input type="number" name="diskon2" min="0" required><br><br>

        -------------------------------------------------------------------------------------<br><br>

        <label for="member">Member:</label>
        <input type="checkbox" name="member"><br><br>

        <input type="submit" name="submit" value="Hitung">
        <br><br>-------------------------------------------------------------------------------------<br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_barang = $_POST['nama_barang'];
        $harga_satuan = $_POST['harga_satuan'];
        $jumlah_beli = $_POST['jumlah_beli'];
        $diskon1 = $_POST['diskon1'];
        
        $nama_barang2 = $_POST['nama_barang2'];
        $harga_satuan2 = $_POST['harga_satuan2'];
        $jumlah_beli2 = $_POST['jumlah_beli2'];
        $diskon2 = $_POST['diskon2'];

        $member = isset($_POST['member']);

        $diskonb1 = 1 - ($diskon1/100);
        $diskonb2 = 1 - ($diskon2/100);

        $harga_barang1 = ($harga_satuan * $jumlah_beli) * $diskonb1;
        $harga_barang2 = ($harga_satuan2 * $jumlah_beli2) * $diskonb2;
        $harga_barang = $harga_barang1 + $harga_barang2;
        $harga_barang_setelah_diskon = $harga_barang1 + $harga_barang2;

        if ($member) {
            $harga_barang_setelah_diskon *= 0.95; // Diskon tambahan 5% jika pembeli adalah member
        }
        echo "<h2>Detail Pembelian:</h2>";
        echo "Nama Barang: " . $nama_barang . "<br>";
        echo "Harga Satuan: Rp " . $harga_satuan . "<br>";
        echo "Jumlah yang Dibeli: " . $jumlah_beli . "<br>";
        echo "Diskon :  " . $diskon1 . "%". "<br><br>";
    
        echo "Nama Barang ke 2: " . $nama_barang2 . "<br>";
        echo "Harga Satuan: Rp " . $harga_satuan2 . "<br>";
        echo "Jumlah yang Dibeli: " . $jumlah_beli2 . "<br>";
        echo "Diskon :  " . $diskon2 . "%". "<br><br>";
    
        echo "Member: " . ($member ? "Ya" : "Tidak") . "<br><br>";
        echo "Total harga : Rp " . $harga_barang . "<br>";
        echo "Jumlah Total Harga yang Harus Dibayar: Rp " . $harga_barang_setelah_diskon . "<br>";
    }
    ?>
</body>
</html>    