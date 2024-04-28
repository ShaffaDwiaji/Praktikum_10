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

            <?php

                // Mendefinisikan jari-jari lingkaran
                $jari_jari = 15;

                // Menghitung keliling lingkaran
                $keliling = 2 * pi() * $jari_jari;

                // Menampilkan hasil keliling lingkaran
                echo "Jari-jari: " . $jari_jari . "<br>";
                echo "Keliling lingkaran dengan jari-jari " . $jari_jari . " adalah: " . $keliling . " cm";

            ?>
    </body>
</html>