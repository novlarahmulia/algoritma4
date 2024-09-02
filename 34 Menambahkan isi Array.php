<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks ke-4
$hobi[] = "Olahraga";

// menambahkan isi pada indeks terakhir
$hobi[] = "jurusan rpl";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br><hr>";
}
print_r("<p><strong>by :novla rahmulia");
?>
