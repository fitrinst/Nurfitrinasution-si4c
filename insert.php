<?php
include_once "DB.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jkl=$_POST['jkl'];
$agama=$_POST['agama'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$create_at="current_timestamp()";
$update_at="current_timestamp()";
//buat SQL
$sql="INSERT INTO mahasiswa VALUES('$nim','$nama','$alamat','$jkl','$agama','$email','$pwd',$create_at,$update_at)";
//proses ke database
$simpan = mysqli_query($koneksi, $sql) or die("Error, $sql");
if($simpan){
echo "sukses";
}else{
echo "gagal";
}
?>