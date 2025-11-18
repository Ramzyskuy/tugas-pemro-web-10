<?php
$golongan = $_POST['golongan'];
$jam_kerja = (int)$_POST['jam_kerja'];

$upah_lembur_per_jam = 3000;
$jam_normal = 48;
$upah_pokok_per_jam = 0;

// Menentukan upah pokok per jam menggunakan SWITCH
switch ($golongan) {
    case 'A':
        $upah_pokok_per_jam = 4000;
        break;
    case 'B':
        $upah_pokok_per_jam = 5000;
        break;
    case 'C':
        $upah_pokok_per_jam = 6000;
        break;
    case 'D':
        $upah_pokok_per_jam = 7500;
        break;
    default:
        $upah_pokok_per_jam = 0;
}

$upah_pokok = 0;
$upah_lembur = 0;
$total_upah = 0;

if ($jam_kerja > $jam_normal) {
    // Ada lembur
    $jam_lembur = $jam_kerja - $jam_normal;
    $upah_pokok = $jam_normal * $upah_pokok_per_jam;
    $upah_lembur = $jam_lembur * $upah_lembur_per_jam;
} else {
    // Tidak ada lembur
    $upah_pokok = $jam_kerja * $upah_pokok_per_jam;
}

$total_upah = $upah_pokok + $upah_lembur;

echo "<h2>Rincian Upah Golongan " . $golongan . "</h2>";
echo "* Upah Normal per Jam: Rp **" . number_format($upah_pokok_per_jam, 0, ',', '.') . ",-**<br>";
echo "* Total Jam Kerja: **" . $jam_kerja . "** jam<br>";
echo "* Jam Lembur: **" . max(0, $jam_kerja - $jam_normal) . "** jam<br>";
echo "* Upah Pokok: Rp **" . number_format($upah_pokok, 0, ',', '.') . ",-**<br>";
echo "* Upah Lembur: Rp **" . number_format($upah_lembur, 0, ',', '.') . ",-**<br>";
echo "---<br>";
echo "Total Upah Diterima: **Rp " . number_format($total_upah, 0, ',', '.') . ",-**";
?>