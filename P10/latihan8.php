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

            // data kelas dengan array 2 dimensi
            $array = array(
                "1C" => array("udin", "ismail", "adi"),
                "1D" => array("lukman", "fajri", "mahmud")
            );
            // menampilkan data array
            print_r($array);
            echo "<br>";
            // menampilkan kelas 1C
            print_r($array["1C"]);
            echo "<br>";
            // menampilakan kelas 1D dengan index [0]
            echo $array['1D'][0];
            echo "<br>";
            // tampilkan fajri
            echo $array['1D'][1];
            echo "<br>";
            // tampilkan adi
            echo $array['1C'][2];
            echo "<br>";

            // data kelas bisa ditulis juga dengan
            $array_simple = [
                "1C" => ["udin","ismail","adi"],
                "1D"=> ["lukman","fajri","mahmud"],
            ];
            ?>
    </body>
</html>