<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

    <?php
    $bilangan1 = $_POST['bil1']; // membaca input bilangan pertama
    $bilangan2 = $_POST['bil2']; // membaca input bilangan kedua
    $bilangan3 = $_POST['bil3']; // membaca input bilangan ketiga

    // ----------------------------------------------------------------
    // CARA KE - 1: Menggunakan Variabel Maksimum Sementara (dari gambar 1)
    // ----------------------------------------------------------------
    
    // Ide: mencari bilangan x yang terbesar dari bil 1 dan bil 2, lalu dibandingkan dengan bilangan ke-3.
    
    if ($bilangan1 > $bilangan2) {
        $maxSementara = $bilangan1;
    } else {
        $maxSementara = $bilangan2;
    }
    
    // Lanjutan dari gambar 2: Membandingkan maksimum sementara dengan bilangan ketiga
    if ($maxSementara > $bilangan3) {
        $maxAkhir = $maxSementara;
    } else {
        $maxAkhir = $bilangan3;
    }

    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

    // ----------------------------------------------------------------
    // CARA KE - 2: Membandingkan Masing-Masing Bilangan (dari gambar 2)
    // ----------------------------------------------------------------
    
    // Idenya adalah langsung membandingkan masing-masing bilangan dengan bilangan yang lain.
    // Misal: jika bil 1 > bil 2 dan bil 1 > bil 3, maka max adalah bil 1.

    if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
        $maxAkhir = $bilangan1;
    } else {
        if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
            $maxAkhir = $bilangan2;
        } else {
            if (($bilangan3 > $bilangan1) && ($bilangan3 > $bilangan2)) {
                $maxAkhir = $bilangan3;
            } else {
                 // Kasus jika ada bilangan yang sama besar atau input tidak valid
                 $maxAkhir = "Salah satu bilangan mungkin sama besar."; 
            }
        }
    }

    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";
    
    // ----------------------------------------------------------------
    // CARA KE - 3: Menggunakan If-Else Bertingkat Sederhana (dari gambar 2)
    // ----------------------------------------------------------------
    
    // Idenya hampir sama dengan cara ke-1, tapi tidak dengan mencari max sementara.
    
    if ($bilangan1 > $bilangan2) {
        if ($bilangan1 > $bilangan3) {
            $maxAkhir = $bilangan1;
        } else {
            $maxAkhir = $bilangan3;
        }
    } else {
        if ($bilangan2 > $bilangan3) {
            $maxAkhir = $bilangan2;
        } else {
            $maxAkhir = $bilangan3;
        }
    }

    echo "<p>Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";
    ?>

</body>
</html>