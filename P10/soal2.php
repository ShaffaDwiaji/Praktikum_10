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
        <h2>Soal Cerita 2</h2>
        <?php
            // Jumlah uang yang akan diambil
            $jumlah_uang = 1387500;
            echo "Jumlah uang Ani yang akan diambil: Rp. " . number_format($jumlah_uang , 0, ',', '.') . ",-<br>";

            // Daftar pecahan uang
            $pecahan_uang = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

            // Inisialisasi array untuk menyimpan jumlah masing-masing pecahan uang
            $jumlah_pecahan = array();

            // Menghitung banyaknya masing-masing pecahan uang
            foreach ($pecahan_uang as $pecahan) {
                // Menghitung jumlah pecahan uang yang diperlukan
                $jumlah = floor($jumlah_uang / $pecahan);

                // Menyimpan jumlah pecahan uang ke dalam array
                $jumlah_pecahan[$pecahan] = $jumlah;

                // Mengurangkan jumlah uang yang sudah diperoleh dari total uang
                $jumlah_uang -= $jumlah * $pecahan;
            }

            // Menampilkan hasil
            echo "Jumlah masing-masing pecahan uang yang diperoleh Ani dari Bank:<br>";
            foreach ($jumlah_pecahan as $pecahan => $jumlah) {
                echo "Rp. " . number_format($pecahan, 0, ',', '.') . " : " . $jumlah . " lembar<br>";
            }
        ?>
    </body>
</html>