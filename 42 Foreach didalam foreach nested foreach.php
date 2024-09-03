<?php
// Daftar daftar angka
$daftarAngka = [
[1, 2, 3],
[4, 5, 6],
[7, 8, 9],
];

// Iterasi menggunakan foreach di dalam foreach
foreach ($daftarAngka as $subList){ 
	

	foreach ($subList as $angka) {
		echo $angka . "<br><hr>";
	}
    echo "\n"; //menmabahkan baris baru setelah setiap sublist
}
print_r("<p><strong>by :novla rahmulia");
?>