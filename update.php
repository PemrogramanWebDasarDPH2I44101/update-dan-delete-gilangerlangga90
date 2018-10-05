<?php
require_once('db.php');
?>

<table>
		<form method="GET" action="proses_update.php">
		<tr>
			<td> Nama </td>
			<td> : </td>
			<td> <input type="text" name="nama" placeholder="<?php echo $row["nama"];?>"></td>
		</tr>

		<tr>
			<td> NIM </td>
			<td> : </td>
			<td> <input type="text" name="nim" placeholder="<?php echo $row["nim"];?>"></td>
		</tr>

		<tr>
			<td> Tanggal Lahir </td>
			<td> : </td>
			<td> <input type="date" name="tgl_lahir" placeholder="<?php echo $row["tgl_lahir"];?>"></td>
		</tr>

		<tr>
			<td> </td>
			<td> </td>
			<td> <input type="submit" name="simpan" value="Simpan"></td>
		</tr>
		</form>
	</table>