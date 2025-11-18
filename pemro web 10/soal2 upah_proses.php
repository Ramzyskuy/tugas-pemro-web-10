<?php
$jam_kerja = (int)$_POST['jam_kerja'];

$upah_normal_per_jam = 2000;
$upah_lembur_per_jam = 3000;
$jam_normal = 48;

$upah_pokok = 0;
$upah_lembur = 0;
$total_upah = 0;

if ($jam_kerja > $jam_normal) {
    // Ada lembur
    $jam_lembur = $jam_kerja - $jam_normal;
    $upah_pokok = $jam_normal * $upah_normal_per_jam;
    $upah_lembur = $jam_lembur * $upah_lembur_per_jam;
} else {
    // Tidak ada lembur (atau jam kerja < 48)
    $upah_pokok = $jam_kerja * $upah_normal_per_jam;
    $upah_lembur = 0; // Tidak ada lembur
}

$total_upah = $upah_pokok + $upah_lembur;

echo "<h2>Rincian Upah</h2>";
echo "* Total Jam Kerja: **" . $jam_kerja . "** jam<br>";
echo "* Jam Lembur: **" . max(0, $jam_kerja - $jam_normal) . "** jam<br>";
echo "* Upah Pokok: Rp **" . number_format($upah_pokok, 0, ',', '.') . ",-**<br>";
echo "* Upah Lembur: Rp **" . number_format($upah_lembur, 0, ',', '.') . ",-**<br>";
echo "---<br>";
echo "Total Upah Diterima: **Rp " . number_format($total_upah, 0, ',', '.') . ",-**";
?>