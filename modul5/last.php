<!DOCTYPE html>
<html>
<head>
    <title>Mochamad Dimas Tsalis</title>
</head>
<body>

    <h2>Input Nilai Siswa</h2>
    <form method="post" action="">
        Nama Siswa: <input type="text" name="nama" required><br><br>
        Nilai Angka: <input type="number" name="nilai" min="0" max="100" required><br><br>
        <input type="submit" name="submit" value="Proses Nilai">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $nilai = (int)$_POST['nilai']; // Ubah ke integer
        $grade = "";


        if ($nilai > 80) {
            $grade = "A";
        } elseif ($nilai > 70 && $nilai <= 79) { // Rentang 71 s/d 79
            $grade = "B";
        } elseif ($nilai > 60 && $nilai <= 69) { // Rentang 61 s/d 69
            $grade = "C";
        } elseif ($nilai > 50 && $nilai <= 59) { // Rentang 51 s/d 59
            $grade = "D";
        } elseif ($nilai < 49) { // Kurang dari 49 (maksimal 48)
            $grade = "Tidak Lulus";
        } else {

            $grade = "Nilai tidak masuk kategori (cek: 49, 50, 60, 70, 80)";
        }

        // Menampilkan hasil
        echo "<h3>Hasil Klasifikasi:</h3>";
        echo "Nama Siswa: " . htmlspecialchars($nama) . "<br>";
        echo "Nilai Angka: " . htmlspecialchars($nilai) . "<br>";
        echo "Grade: " . htmlspecialchars($grade) . "<br>";
    }
    ?>

</body>
</html>