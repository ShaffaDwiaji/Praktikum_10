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
                $y = 10;
                // Membuat segitiga bintang
                for ($i = 1; $i <= $y; $i++) {
                    // Membuat baris segitiga
                    for ($j = 1; $j <= $i; $j++) {
                        echo " * ";
                    }
                    echo "<br>";
                }
            ?>
    </body>
</html>