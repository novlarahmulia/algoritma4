<?php
$kendaraan = array('jenis' => 'kereta', 'merk' => 'yamaha', 'tipe' => 'vario');
foreach ($kendaraan as $key => $val) {
	echo ucfirst($key) . ': ' . $val . '<br/><hr>';
}
print_r("<p><strong>by :novla rahmulia");
?>