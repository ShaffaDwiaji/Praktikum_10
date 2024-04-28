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

            // contoh fungsi
            function writeMsg($nama) {
                echo "Selamat Datang " . $nama ."<br>";
            }
            writeMsg(nama: "Ahmad"); // pemanggilan fungsi

            // fungsi dengan mengirim nilai balik
            function tambah(int $angka1, int $angka2) {
                $a = $angka1 + $angka2;
                return $a; // mengirim nilai $a ke pemanggil
            }
            $hasil = tambah(angka1:"5", angka2:"5");
            echo ($hasil);
            ?>
    </body>
</html>