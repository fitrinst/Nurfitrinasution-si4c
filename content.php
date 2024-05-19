<?php
//cek data dari link dengan variabel page
if (empty($_GET['page'])) {
    //jika page kosong
 echo "Maaf page yang anda minta tidak ada";
}else{
    //jika page berisi
    $page=$_get['page'];
    $file=$page. ".php"; //exp page=about -> about.php
    //cek file ada atau tidak
    if(file_exists($file)){
        //jika file ada
        include $file;
    }else{
        //jika file tidak ada include home.php
        include "home.php";
    }
}
?>