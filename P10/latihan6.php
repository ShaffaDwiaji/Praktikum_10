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
                // while loop
                $x = 10;
                while ($x >= 5) {
                    echo "Nomor : $x <br>";
                    $x--;
                }

                // do while
                echo "<br>";
                $x = 1;
                do {
                    echo "Nomor : $x <br>";
                    $x++;
                } while ($x <= 5);

                // foreach
                echo "<br>";
                $colors = array("red", "green", "blue", "yellow");
                foreach ($colors as $value) {
                    echo "$value <br>";
                }

                // for
                echo "<br>";
                for ($x = 0; $x <= 10; $x++) {
                    echo "Nomor : $x <br>";
                }

                // for dengan break
                echo "<br>";
                for ($x = 0; $x < 10; $x++) {
                    if ($x == 4) {
                        break;
                    }
                    echo "Nomor : $x <br>";
                }
                
            ?>
    </body>
</html>