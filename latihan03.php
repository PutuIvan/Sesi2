<?php
    $opsi = "p1";

    if(isset($_GET["pg"])){
        $opsi = $_GET["pg"];
    }
    $opsi = $_GET ["pg"];

    $JudulPage = "";
    $konten = "";


    switch($opsi){
        case "p1":
            $JudulPage = "Page 1";
            $konten = "<h3>Page 1</h3><p>Isi Dari Page Satu</p>";
            break;
        case "p2":
            $JudulPage = "Page 2";
            $konten = "<h3>Page 2</h3><p>Isi Dari Page Dua</p>";
            break;
        case "p3":
            $JudulPage = "Page 3";
            $konten = "<h3>Page 3</h3><p>Isi Dari Page Tiga</p>";
            break;
        case "p4":
            $JudulPage = "Page 4";
            $konten = "<h3>Page 4</h3><p>Isi Dari Page Empat</p>";
            break;
        default:
            $JudulPage = "Page 1";
            $konten = "<h3>Page 1</h3><p>Isi Dari Page 1</p>";
            break;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$JudulPage; ?></title>
    </head>
    <body>
        <a href="latihan03.php?pg=p1">Page1</a> <a href="latihan03.php?pg=p2">Page2</a> <a href="latihan03.php?pg=p3">Page3</a> <a href="latihan03.php?pg=p4">Page4</a>
        <?php
            echo $konten;
        ?>
    </body>
    </html>