<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Membuat Novel",
    "penulis" => "novlarahmulia",
    "view" => 130
];

// mencetak isi array assosiatif
echo "<h2>".$artikel["judul"]."</h2>";
echo "<p>oleh: ".$artikel["penulis"]."</p>";
echo "<p>View: ".$artikel["view"]."</p>";
print_r("<p><strong>by :novla rahmulia");

?>