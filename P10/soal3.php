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
        <h2>Soal Cerita 3</h2>
            <?php
                $data = [
                    ['No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi'],
                    ['No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni'],
                    ['No Urut' => 3, 'Poin' => 70, 'Siswa' => 'Jihan'],
                    ['No Urut' => 4, 'Poin' => 85, 'Siswa' => 'Aya'],
                    ['No Urut' => 5, 'Poin' => 90, 'Siswa' => 'Ita'],
                    ['No Urut' => 6, 'Poin' => 95, 'Siswa' => 'Budi'],
                    ['No Urut' => 7, 'Poin' => 65, 'Siswa' => 'Tini'],
                    ['No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari'],
                ];

                // Data Siswa
                foreach ($data as $siswa) {
                    echo "No Urut: " . $siswa['No Urut'] . ", ";
                    echo "Poin: " . $siswa['Poin'] . ", ";
                    echo "Siswa: " . $siswa['Siswa'] . "<br>";
                } echo "<br>";

                // a) Tampilkan poin siswa dengan nomor urut 5
                echo "a) Poin siswa dengan nomor urut 5: ";
                foreach ($data as $siswa) {
                    if ($siswa['No Urut'] == 5) {
                        echo $siswa['Poin'];
                        break;
                    }
                }
                echo "<br>";

                // b) Tampilkan semua nama siswa yang memiliki poin 90
                echo "b) Nama siswa yang memiliki poin 90: ";
                foreach ($data as $siswa) {
                    if ($siswa['Poin'] == 90) {
                        echo $siswa['Siswa'] . ", ";
                    }
                }
                echo "<br>";

                // c) Tampilkan semua nama siswa yang memiliki poin 100
                echo "c) Nama siswa yang memiliki poin 100: ";
                $ada_siswa_poin_100 = false;
                foreach ($data as $siswa) {
                    if ($siswa['Poin'] == 100) {
                        echo $siswa['Siswa'] . ", ";
                        $ada_siswa_poin_100 = true;
                    }
                }

                if (!$ada_siswa_poin_100) {
                    echo "Tidak ada";
                }
            ?>
    </body>
</html>