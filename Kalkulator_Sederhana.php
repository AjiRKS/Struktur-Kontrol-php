<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
</head>
<body>
	<h2>Kalkulator Sederhana</h2>
	<form method="post">
		<input type="number" name="bil1" placeholder="Masukkan bilangan pertama" min="0" required>
		<input type="number" name="bil2" placeholder="Masukkan bilangan kedua" min="0" required>
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
		<input type="submit" name="hitung" value="Hitung">
	</form>

	<?php
		if(isset($_POST['hitung'])){
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			$operator = $_POST['operator'];

			switch ($operator) {
				case '+':
					$hasil = $bil1 + $bil2;
					break;
				case '-':
					$hasil = $bil1 - $bil2;
					break;
				case '*':
					$hasil = $bil1 * $bil2;
					break;
				case '/':
					$hasil = $bil1 / $bil2;
					break;
				case '%':
					$hasil = $bil1 % $bil2;
					break;
				
				default:
					 echo "Operator yang Anda masukkan salah";
					break;
			}

			echo "Hasil perhitungan: ".$bil1." ".$operator." ".$bil2." = ".$hasil;
		}
	?>
</body>
</html>
