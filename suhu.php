<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Satuan Suhu</title>
</head>
<body>
    <h1>Konversi Satuan Suhu</h1>
    
    <form method="post" action="">
        <label for="satuan">Konversi dari:</label>
        <select name="satuan" id="satuan">
            <option value="celcius">Celcius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="reamur">Reamur</option>
        </select>
        <br><br>

        <label for="nilai_suhu">Suhu:</label>
        <input type="number" name="nilai_suhu" id="nilai_suhu" required>
        <br><br>

        <label for="konversi_ke">Konversi ke:</label>
        <select name="konversi_ke" id="konversi_ke">
            <option value="celcius">Celcius</option>
            <option value="fahrenheit">Fahrenheit</option>
            <option value="reamur">Reamur</option>
        </select>
        <br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $satuan = $_POST['satuan'];
        $nilai_suhu = $_POST['nilai_suhu'];
        $konversi_ke = $_POST['konversi_ke'];
        $hasil = 0;

        if ($satuan == $konversi_ke) {
            $hasil = $nilai_suhu; 
        } else {
            if ($satuan == "celcius") {
                $celcius = $nilai_suhu;
            } elseif ($satuan == "fahrenheit") {
                $celcius = ($nilai_suhu - 32) * 5 / 9;
            } elseif ($satuan == "reamur") {
                $celcius = $nilai_suhu * 5 / 4;
            
            }

            if ($konversi_ke == "celcius") {
                $hasil = $celcius;
            } elseif ($konversi_ke == "fahrenheit") {
                $hasil = ($celcius * 9 / 5) + 32;
            } elseif ($konversi_ke == "reamur") {
                $hasil = $celcius * 4 / 5;
            
            }
        }

        echo "<h2>Hasil Konversi: " . round($hasil, 2) . " $konversi_ke</h2>";
    }
    ?>
</body>
</html>
