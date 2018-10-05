<?php
    require_once('db.php');

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    
    $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', tgl_lahir = '$tgl_lahir' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
    header('Location: list.php');
    }else {
    echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}

mysqli_close($conn);

?>