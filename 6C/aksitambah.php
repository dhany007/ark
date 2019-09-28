
<?php
    #koneksi
    include "koneksi.php";

    #menangkap data dari form
    $nama = $_POST['nama'];
    $kerja = $_POST['kerja'];
    $gaji = $_POST['gaji'];

    #menginput data ke data base
    mysqli_query($koneksi,"insert into name (name, id_work, id_salary) values('$nama','$kerja','$gaji')");

    #kembali ke halaman
    header("location:index.php");

?>