<?php
/**
 * Tugas Minggu 02: Sistem Penilaian Mahasiswa
 * File: penilaian.php
 */

// =========================================================================
// 1. DEKLARASI VARIABEL & TIPE DATA
// =========================================================================
$nama        = "Budi Santoso"; // string
$nim         = "12345678";     // string / integer
$umur        = 20;             // integer
$nilaiUTS    = 75.0;           // float
$nilaiUAS    = 80.0;           // float
$isMahasiswa = true;           // boolean (true: aktif, false: tidak aktif)

// =========================================================================
// 2. MANIPULASI STRING
// =========================================================================
$namaKapital   = strtoupper($nama);
$namaKecil     = strtolower($nama);
$jumlahKarakter = strlen($nama);
$tigaHurufAwal = substr($nama, 0, 3);

// =========================================================================
// 3. PERHITUNGAN NILAI & OPERATOR ARITHMETIC
// =========================================================================
// Rumus: (UTS * 40%) + (UAS * 60%)
$nilaiAkhir = ($nilaiUTS * 0.4) + ($nilaiUAS * 0.6);

// Demonstrasi Operator Unary (Increment & Decrement)
$umurTahunDepan = $umur;
$umurTahunDepan++; // Increment ++

$umurTahunLalu = $umur;
$umurTahunLalu--;  // Decrement --

// Demonstrasi Shortcut Assignment
$bonusNilai  = 10;
$bonusNilai += 5;  // Tambah 5 (Hasil: 15)
$bonusNilai -= 2;  // Kurang 2 (Hasil: 13)
$bonusNilai *= 2;  // Dikali 2 (Hasil: 26)

// =========================================================================
// 4. OPERATOR LOGIKA & PENENTUAN STATUS KELULUSAN
// =========================================================================
$status = "";

if ($isMahasiswa == true && $nilaiAkhir >= 60) {
    $status = "Lulus";
} elseif ($isMahasiswa == true && $nilaiAkhir < 60) {
    $status = "Tidak Lulus";
} elseif ($isMahasiswa == false) {
    $status = "Bukan Mahasiswa Aktif";
}

// =========================================================================
// 5. RINGKASAN OUTPUT
// =========================================================================
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Penilaian Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; line-height: 1.6; }
        .box { border: 1px solid #ccc; padding: 20px; border-radius: 8px; width: 450px; background-color: #f9f9f9; }
        h2 { margin-top: 0; color: #333; }
        .row { display: flex; justify-content: space-between; margin-bottom: 8px; }
        .label { font-weight: bold; }
        hr { border: 0; border-top: 1px solid #ddd; margin: 15px 0; }
    </style>
</head>
<body>

    <div class="box">
        <h2>Ringkasan Output</h2>
        <hr>
        <div class="row"><span class="label">Nama:</span> <span><?= $nama; ?></span></div>
        <div class="row"><span class="label">NIM:</span> <span><?= $nim; ?></span></div>
        <div class="row"><span class="label">Umur:</span> <span><?= $umur; ?> tahun</span></div>
        <div class="row"><span class="label">Nilai UTS:</span> <span><?= $nilaiUTS; ?></span></div>
        <div class="row"><span class="label">Nilai UAS:</span> <span><?= $nilaiUAS; ?></span></div>
        <div class="row"><span class="label">Nilai Akhir:</span> <span><?= $nilaiAkhir; ?></span></div>
        <div class="row"><span class="label">Status:</span> <span><strong><?= $status; ?></strong></span></div>
    </div>

</body>
</html>