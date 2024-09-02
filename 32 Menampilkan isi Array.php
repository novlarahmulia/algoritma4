<?php

// membuat array
$minuman = ["susu", "kopi", "nutrisari"];

// menampilkan isi array dengan perulangan foreach
foreach($minuman as $isi){
    echo $isi."<br>";
}
echo "<hr>";
// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($minuman)){
    echo $minuman[$i]."<br>";
    $i++;
}


print_r("<p><strong>by :novla rahmulia");
?>