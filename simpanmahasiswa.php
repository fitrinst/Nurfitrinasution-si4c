<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `created_at`, `update_at`) VALUES ('1234567', 'nurfitri nasution', 'Kiasaran', 'WANITA', 'Islam', 'nurfitrinasution@gmail.com', '18112004', current_timestamp(), '')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL error'());
if($q){
    echo"Data berhasil disimpan";
}else{
    echo"Gagal menyimpan data!";
}
?>