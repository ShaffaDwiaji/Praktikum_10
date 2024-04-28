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
                $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

                // Menampilkan hasil
                foreach ($angka as $bilangan) {
                    if ($bilangan % 2 == 0) {
                        echo "Nomor : $bilangan Genap.<br>";
                    } else {
                        echo "Nomor : $bilangan Ganjil.<br>";
                    }
                }
            ?>
    </body>
</html>