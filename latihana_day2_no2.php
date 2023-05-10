<html>
<head>
	<title>Diskon Belanja</title>
<body>
<?php

//Deklrasi Variabel
$minimal_belanja = 100000;
$total_belanja = 100000;

//Cek apakah total belanja lebih besar dari minimal belanja
if ($total_belanja >= $minimal_belanja) { //jika iya maka dapat diskon
    //Menghitung diskon
    $diskon = $total_belanja * 0.1;
    //Menghitung total bayar
    $total_bayar = $total_belanja - $diskon;
    // Output jika dapat diskon
    echo "Total Belanjamu : Rp " . $total_belanja . "<br>";
    echo "Kamu mendapat diskon sebesar 10% : Rp " . $diskon . "<br>";
    echo "Kamu hanya perlu membayar : Rp " . $total_bayar . "<br>";
}

else {
    echo "Total Belanjamu : Rp " . $total_belanja . "<br>";
    echo "Maaf, anda tidak dapat diskon!" . "<br>";
}

?>
</body>
</html>