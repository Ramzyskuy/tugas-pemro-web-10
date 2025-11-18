<?php
$tahun = (int)$_POST['tahun']; // Ambil dan pastikan input adalah integer
$status = "";

// Syarat Tahun Kabisat: Habis dibagi 4, TETAPI tidak habis dibagi 100, ATAU habis dibagi 400.
if (($tahun % 4 == 0) && ($tahun % 100 != 0) || ($tahun % 400 == 0)) {
    $status = "adalah Tahun Kabisat";
} else {
    $status = "bukan Tahun Kabisat";
}

echo "<h2>Hasil Pengecekan</h2>";
echo "Tahun **" . $tahun . "** **" . $status . "**.";
?>