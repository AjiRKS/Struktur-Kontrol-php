<html>
<head>
	<title>Diskon Belanja</title>
<body>
<?php

//Deklrasi Variabel
$minimal_belanja = 100000;
$total_belanja = 120000;

//Cek apakah total belanja lebih besar dari minimal belanja
if ($total_belanja > $minimal_belanja) { //jika iya maka dapat diskon
    //Menghitung diskon
    $diskon = $total_belanja * 0.1;
    //Menghitung total bayar
    $total_bayar = $total_belanja - $diskon;
    // Output jika dapat diskon
    echo "Selamat, anda dapat diskon 10%!, kamu hanya perlu membayar Rp  " . $total_bayar;
}

else {
echo "Maaf, anda tidak dapat diskon!, kamu harus membayar RP " .$total_belanja;
}
?>
</body>
</html>