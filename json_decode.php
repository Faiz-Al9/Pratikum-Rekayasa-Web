<?php
// Langkah 1: Membuat variabel yang berisi JSON
$jsonData = '{
    "judul": "Belajar Pemrograman",
    "penulis": {
        "nama": "Yoga",
        "usia": 30
    },
    "tahun_terbit": 2022,
    "bab": [
        {
            "judul": "Pengenalan Pemrograman",
            "halaman": 10
        },
        {
            "judul": "Struktur Data",
            "halaman": 20
        },
        {
            "judul": "Algoritma",
            "halaman": 30
        }
    ]
}';

// Langkah 2: Decode JSON menjadi PHP Object
$dataObject = json_decode($jsonData);

// Akses nilai dari PHP Object
echo "<h3>Hasil Decode ke PHP Object</h3>";
echo "Judul Buku: " . $dataObject->judul . "<br>";
echo "Nama Penulis: " . $dataObject->penulis->nama . "<br>";
echo "Usia Penulis: " . $dataObject->penulis->usia . "<br>";
echo "Tahun Terbit: " . $dataObject->tahun_terbit . "<br>";
foreach ($dataObject->bab as $index => $bab) {
    echo "Bab " . ($index + 1) . " - Judul: " . $bab->judul . ", Halaman: " . $bab->halaman . "<br>";
}

// Langkah 3: Decode JSON menjadi PHP Array
$dataArray = json_decode($jsonData, true);

// Akses nilai dari PHP Array
echo "<h3>Hasil Decode ke PHP Array</h3>";
echo "Judul Buku: " . $dataArray['judul'] . "<br>";
echo "Nama Penulis: " . $dataArray['penulis']['nama'] . "<br>";
echo "Usia Penulis: " . $dataArray['penulis']['usia'] . "<br>";
echo "Tahun Terbit: " . $dataArray['tahun_terbit'] . "<br>";
foreach ($dataArray['bab'] as $index => $bab) {
    echo "Bab " . ($index + 1) . " - Judul: " . $bab['judul'] . ", Halaman: " . $bab['halaman'] . "<br>";
}
?>
