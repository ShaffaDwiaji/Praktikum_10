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
        <h2>Soal Cerita 1</h2>
        <?php
            // Gaji pokok
            $gaji_pokok = 3250000;

            // Tunjangan jabatan
            $tunjangan = 1200000;

            // Menghitung gaji kotor
            $gaji_kotor = $gaji_pokok + $tunjangan;

            // Pajak penghasilan (10% dari gaji kotor)
            $pajak = 0.1 * $gaji_kotor;

            // Menghitung gaji bersih
            $gaji_bersih = $gaji_kotor - $pajak;

            // Menampilkan hasil
            echo "Gaji Pokok Obi: Rp. " . number_format($gaji_pokok , 2, ',', '.') . ",-<br>";
            echo "Tunjangan Jabatan Obi: Rp. " . number_format($tunjangan , 2, ',', '.') . ",-<br>";
            echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gaji_bersih, 2, ',', '.') . ",-";
        ?>

    </body>
</html>