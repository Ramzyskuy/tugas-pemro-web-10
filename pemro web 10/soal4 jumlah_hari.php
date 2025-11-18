<?php
// Ambil angka bulan saat ini (1 sampai 12)
$bulan_angka = (int)date('n'); 
$jumlah_hari = 0;

echo "<h2>Menampilkan Jumlah Hari Berdasarkan Bulan Saat Ini</h2>";
echo "Bulan saat ini adalah bulan ke-**" . $bulan_angka . "**.<br><br>";

// Menentukan jumlah hari menggunakan SWITCH
switch ($bulan_angka) {
    // Bulan dengan 31 hari
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlah_hari = 31;
        $nama_bulan = date('F');
        break;

    // Bulan dengan 30 hari
    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
        $jumlah_hari = 30;
        $nama_bulan = date('F');
        break;

    // Bulan Februari
    case 2:
        // Cek tahun kabisat untuk menentukan 28 atau 29 hari
        $tahun = (int)date('Y');
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
            $jumlah_hari = 29;
            $status_kabisat = " (Tahun Kabisat)";
        } else {
            $jumlah_hari = 28;
            $status_kabisat = " (Bukan Tahun Kabisat)";
        }
        $nama_bulan = "Februari";
        break;

    default:
        $jumlah_hari = 0;
        $nama_bulan = "Bulan tidak valid";
        break;
}

echo "Bulan **" . $nama_bulan . "** memiliki **" . $jumlah_hari . "** hari" . ($bulan_angka == 2 ? $status_kabisat : "") . ".";
?>