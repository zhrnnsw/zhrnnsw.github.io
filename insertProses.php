<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $noTelp = $_GET['noTelp'];
    $jk = $_GET['jk'];
    $agama = $_GET['agama'];

    $sql = "INSERT INTO member(id,nama, alamat, noTelp, jk, agama)
            VALUE ('$id', '$nama', '$alamat', '$noTelp', '$jk', '$agama')";

    if (mysqli_query($connect,$sql)){
        echo "Pendaftaran berhasil";
    } else {
        echo "Pendaftaran gagal <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);

?>