<?php

//=========================================================================================================CURL HK=====================================================================================//
// URL dari situs web yang ingin Anda ambil data
$urlhk = 'https://opesia.vip/dataharian/datahongkong3.php';
// Inisialisasi Curl
$hk = curl_init();
// Set opsi Curl
curl_setopt($hk, CURLOPT_URL, $urlhk); // Set URL
curl_setopt($hk, CURLOPT_RETURNTRANSFER, 1); // Aktifkan mode pengembalian hasil
// Eksekusi Curl dan simpan hasil dalam variabel $response
$responsehk = curl_exec($hk);
// Cek jika pengambilan data berhasil
if ($responsehk === false) {
    die('Error: Curl gagal mengambil data.');
}
// Menggunakan DOMDocument untuk mengurai HTML
$domhk = new DOMDocument();
@$domhk->loadHTML($responsehk);
// Mencari elemen tabel dengan class "data" (Anda perlu menyesuaikan dengan HTML pada situs web target)
$tableshk = $domhk->getElementsByTagName('table');
$nomerhk = "";
foreach ($tableshk as $tablehk) {
    if ($tablehk->getAttribute('class') == 'data-hk') {
        // Temukan elemen <tbody>
        $tbodyhk = $tablehk->getElementsByTagName('tbody')->item(0);
        if ($tbodyhk) {
            // Ambil semua baris dari <tbody>
            $rowshk = $tbodyhk->getElementsByTagName('tr');
            if ($rowshk->length > 0) {
                // Ambil baris pertama (indeks 0)
                $firstRowhk = $rowshk->item(2);
                // Ambil sel pertama (indeks 0)
                $cellshk = $firstRowhk->getElementsByTagName('td');
                if ($cellshk->length > 0) {
                    // Ambil teks dari sel pertama (kolom nama)
                    $nomerhk = $cellshk->item(3)->textContent;
                    break; // Keluar dari loop setelah menemukan nama
                }
            }
        }
    }
}
// Tampilkan alamat
$fixhk = preg_replace('/[^0-9]/', '', $nomerhk);
// Tutup koneksi Curl
curl_close($hk);

//=========================================================================================================CURL SDY=====================================================================================//


// URL dari situs web yang ingin Anda ambil data
$urlsdy = 'https://opesia.vip/dataharian/datasydney3.php';
// Inisialisasi Curl
$sdy = curl_init();
// Set opsi Curl
curl_setopt($sdy, CURLOPT_URL, $urlsdy); // Set URL
curl_setopt($sdy, CURLOPT_RETURNTRANSFER, 1); // Aktifkan mode pengembalian hasil
// Eksekusi Curl dan simpan hasil dalam variabel $response
$responsesdy = curl_exec($sdy);
// Cek jika pengambilan data berhasil
if ($responsesdy === false) {
    die('Error: Curl gagal mengambil data.');
}
// Menggunakan DOMDocument untuk mengurai HTML
$domsdy = new DOMDocument();
@$domsdy->loadHTML($responsesdy);
// Mencari elemen tabel dengan class "data" (Anda perlu menyesuaikan dengan HTML pada situs web target)
$tablessdy = $domsdy->getElementsByTagName('table');
$nomersdy = "";
foreach ($tablessdy as $tablesdy) {
    if ($tablesdy->getAttribute('class') == 'data-SDY') {
        // Temukan elemen <tbody>
        $tbodysdy = $tablesdy->getElementsByTagName('tbody')->item(0);
        if ($tbodysdy) {
            // Ambil semua baris dari <tbody>
            $rowssdy = $tbodysdy->getElementsByTagName('tr');
            if ($rowssdy->length > 0) {
                // Ambil baris pertama (indeks 0)
                $firstRowsdy = $rowssdy->item(2);
                // Ambil sel pertama (indeks 0)
                $cellssdy = $firstRowsdy->getElementsByTagName('td');
                if ($cellssdy->length > 0) {
                    // Ambil teks dari sel pertama (kolom nama)
                    $nomersdy = $cellssdy->item(3)->textContent;
                    break; // Keluar dari loop setelah menemukan nama
                }
            }
        }
    }
}
// Tampilkan alamat
$fixsdy = preg_replace('/[^0-9]/', '', $nomersdy);
// Tutup koneksi Curl
curl_close($sdy);

//=========================================================================================================CURL SG=====================================================================================//


// URL dari situs web yang ingin Anda ambil data
$urlsg = 'https://opesia.vip/dataharian/datasingapore3.php';
// Inisialisasi Curl
$sg = curl_init();
// Set opsi Curl
curl_setopt($sg, CURLOPT_URL, $urlsg); // Set URL
curl_setopt($sg, CURLOPT_RETURNTRANSFER, 1); // Aktifkan mode pengembalian hasil
// Eksekusi Curl dan simpan hasil dalam variabel $response
$responsesg = curl_exec($sg);
// Cek jika pengambilan data berhasil
if ($responsesg === false) {
    die('Error: Curl gagal mengambil data.');
}
// Menggunakan DOMDocument untuk mengurai HTML
$domsg = new DOMDocument();
@$domsg->loadHTML($responsesg);
// Mencari elemen tabel dengan class "data" (Anda perlu menyesuaikan dengan HTML pada situs web target)
$tablessg = $domsg->getElementsByTagName('table');
$nomersg = "";
foreach ($tablessg as $tablesg) {
    if ($tablesg->getAttribute('class') == 'data-SGP') {
        // Temukan elemen <tbody>
        $tbodysg = $tablesg->getElementsByTagName('tbody')->item(0);
        if ($tbodysg) {
            // Ambil semua baris dari <tbody>
            $rowssg = $tbodysg->getElementsByTagName('tr');
            if ($rowssg->length > 0) {
                // Ambil baris pertama (indeks 0)
                $firstRowsg = $rowssg->item(2);
                // Ambil sel pertama (indeks 0)
                $cellssg = $firstRowsg->getElementsByTagName('td');
                if ($cellssg->length > 0) {
                    // Ambil teks dari sel pertama (kolom nama)
                    $nomersg = $cellssg->item(3)->textContent;
                    break; // Keluar dari loop setelah menemukan nama
                }
            }
        }
    }
}
// Tampilkan alamat
$fixsg = preg_replace('/[^0-9]/', '', $nomersg);
// Tutup koneksi Curl
curl_close($sg);


//=========================================================================================================Export Data=====================================================================================//
echo "<h3 id='full'>SIANG : $fixsdy | SORE : $fixsg | MALAM : $fixhk</h3>";
echo "<div id='yesterday'>$fixhk</div>";
