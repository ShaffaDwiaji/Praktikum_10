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

            $namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
            echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ". <br>";

            // tampilkan Mangga
            echo "saya suka " . $namaBuah[1] . "<br>";
            // tampilkan Jeruk
            echo "saya suka " . $namaBuah[2] . "<br>";
            // tampilkan Apel
            echo "saya suka " . $namaBuah[3] . "<br>";
            // tampilkan Melon
            echo "saya suka " . $namaBuah[4] . "<br>";
            
            // array dengan spesifik index
            $umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
            $umur['Ahmad'] = "50 Tahun";
            echo "Umur Andi adalah " . $umur["Andi"] . "<br>";
            echo "<br>";
            
            // tampilkan semua umur
            foreach ($umur as $nama => $usia) {
                echo "$nama, Umur: $usia . <br>";
            }
            ?>
    </body>
</html>