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
            // variabel dalam php
            $txt = "Selamat Datang !";
            $txt2 = "Politeknik Negeri Madiun";
            $x = 5;
            $y = 10.5;

            echo "<p> isi variabel txt adalah: $txt </p>";
            echo "<P> isi variabel x adalah: $x </p>";
            echo "<p> isi variabel y adalah: $y </p>";
            echo "Belajar PHP di " . $txt2 . "<br>";
            echo $x + $y;

            // PHP Konstanta
            define("nama_konstanta", "Shaffa Dwiaji Feryansyah Putra");
            echo "<br>".nama_konstanta;
            
            ?>
    </body>
</html>