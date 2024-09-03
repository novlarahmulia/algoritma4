<!DOCTYPE html>
$no = 1;
$tabel = '
<table>
	<tr>
		<th>No</th>
		<th>Bulan</th>
		<th>Penjualan</th>
	</tr>';
foreach ($sales as $bulan => $nilai) {
	$tabel .= '
	<tr>
		<td>' . $no . '</td>
		<td>' . $bulan . '</td>
		<td>' . $nilai . '</td>
	</tr>';
	$no++;
}
$tabel .= '</table>';
echo $tabel;


<p><strong>by :novla rahmulia