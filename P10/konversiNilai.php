<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Div dan Span</title>
        <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16x16" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"content="Belajar PHP">
        <meta name="keyword" content="234311028">
        <meta name="author" content="Shaffa Dwiaji Feryansyah Putra">
    </head>
    <body>
        <h1>Halaman PHP Saya </h1>
        <h2>Konversi Nilai Angka ke Huruf</h2>
        <form method="post">
            <label for="nilai">Masukkan nilai angka:</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100" required>
            <button type="submit">Konversi</button>
        </form>

            <?php
            /*  Huruf   Nilai
                C   =   0 -> 59
                BC  =   60 -> 69
                B   =   70 -> 79
                AB  =   80 -> 89
                A   =   90 -> 100
            */

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Mendapatkan nilai angka dari input
                $nilai = $_POST["nilai"];
        
                // Konversi nilai angka ke huruf berdasarkan aturan
                if ($nilai >= 0 && $nilai <= 59) {
                    $hasil = "C";
                } elseif ($nilai >= 60 && $nilai <= 69) {
                    $hasil = "BC";
                } elseif ($nilai >= 70 && $nilai <= 79) {
                    $hasil = "B";
                } elseif ($nilai >= 80 && $nilai <= 89) {
                    $hasil = "AB";
                } elseif ($nilai >= 90 && $nilai <= 100) {
                    $hasil = "A";
                } else {
                    $hasil = "Nilai tidak valid";
                }
        
                // Menampilkan hasil konversi
                echo "<p>Nilai huruf untuk nilai angka $nilai adalah: $hasil</p>";
            }
            ?>
    </body>
</html>