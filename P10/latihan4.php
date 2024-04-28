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
            /* Operator Logika yang bisa digunakan
            * ==    Sama Dengan         $x == $y
            * ===   Identical           $x === $y
            * !=    Tidak sama dengan   $x != $y
            * <>    Tidak sama dengan   $x <> $y
            * !==   Not identical       $x !== $y
            * >     Lebih Besar dari    $x > $y
            * <     Kurang Dari         $x < $y
            * >=    Lebih besar atau Sama dengan    $x >= $y
            * <=    Kurang dari atau sama dengan    $x <= $y
            * <=>   Spaceship           $x <=> $y
            */

            $t = date(format: "H"); // mendapatkan jam dengan format 1-24
            echo "If <br>";
            if ($t < 16) {
                echo "Selamat Siang!";
            }

            echo "<br> If dan Else <br>";
            if ($t < 20) {
                echo "Selamat Siang!";
            } else {
                echo "Selamat Malam!";
            }
            
            echo "<br> Nested If <br>";
            if ($t < 12) {
                echo "Selamat Pagi!";
            } elseif ($t < 16) {
                echo "Selamat Siang!";
            } else {
                echo "Selamat Malam!";
            }
            ?>
    </body>
</html>