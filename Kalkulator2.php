<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="POST" action="">
        Bilangan 1: <input type="number" name="bilangan1" required><br>
        Bilangan 2: <input type="number" name="bilangan2" required><br>
        Operator: <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select><br>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $bilangan1 + $bilangan2;
                break;
            case '-':
                $hasil = $bilangan1 - $bilangan2;
                break;
            case '*':
                $hasil = $bilangan1 * $bilangan2;
                break;
            case '/':
                $hasil = $bilangan1 / $bilangan2;
                break;
            case '%':
                $hasil = $bilangan1 % $bilangan2;
                break;
            default:
                echo "Operator tidak valid!";
                return;
        }

        echo "<h3>Output:</h3>";
        echo "Bilangan 1 = $bilangan1<br>";
        echo "Bilangan 2 = $bilangan2<br>";
        echo "Operator = $operator<br>";
        echo "Hasilnya: " .$bilangan1. " " . $operator. " ". $bilangan2 . " = ". $hasil;
    }
    ?>
</body>
</html>
