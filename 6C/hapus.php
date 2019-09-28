<?php
    include "koneksi.php";

    #menangkap data dari link
    $id=$_GET['id'];

    #menghapus data berdasarkan id
    mysqli_query($koneksi,"delete from name where id = '$id'");

    #kembali ke halaman awal
    header("location:index.php");
?>