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
        <h2>Konversi Angka ke Huruf</h2>
        <form method="post">
            <label for="angka">Masukkan angka (1-9):</label>
            <input type="number" id="angka" name="angka" min="1" required>
            <button type="submit">Konversi</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Mendapatkan nilai angka dari input
                $angka = $_POST["angka"];

                // Konversi angka ke huruf menggunakan switch
                switch ($angka) {
                    case 1:
                        $hasil = "satu";
                        break;
                    case 2:
                        $hasil = "dua";
                        break;
                    case 3:
                        $hasil = "tiga";
                        break;
                    case 4:
                        $hasil = "empat";
                        break;
                    case 5:
                        $hasil = "lima";
                        break;
                    case 6:
                        $hasil = "enam";
                        break;
                    case 7:
                        $hasil = "tujuh";
                        break;
                    case 8:
                        $hasil = "delapan";
                        break;
                    case 9:
                        $hasil = "sembilan";
                        break;
                    default:
                        $hasil = "Angka tidak valid";
                }

                // Menampilkan hasil konversi
                echo "<p>Konversi angka $angka menjadi huruf: $hasil</p>";
            }
        ?>
    </body>
</html>