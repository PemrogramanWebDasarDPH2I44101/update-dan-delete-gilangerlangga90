<?php

require_once("db.php");


$nim		= $_POST['nim'];
$nama 		= $_POST['nama'];
$tgl_lahir	= $_POST['tgl_lahir'];

$sql = "INSERT INTO mahasiswa (nim, nama, tgl_lahir)
		VALUES ('$nim', '$nama', '$tgl_lahir')";


if (mysqli_query($conn, $sql)) {
	echo "Data berhasil disimpan! <br>";
    echo "<a href='list.php' style='text-decoration: none;'> Lihat Data </a>";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?> 