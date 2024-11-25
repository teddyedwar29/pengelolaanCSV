<?php
// Nama file CSV
$file = 'data.csv';

// Buka file CSV
if (($handle = fopen($file, 'r')) !== false) {
    // Loop untuk membaca setiap baris
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        // Tampilkan data per baris (array)
        print_r($data);
    }
    // Tutup file
    fclose($handle);
} else {
    echo "Gagal membuka file.";
}
