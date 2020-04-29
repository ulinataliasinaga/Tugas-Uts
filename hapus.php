<?php
include "konek.php";
$hapus = mysqli_query($konek, "DELETE FROM mahasiswa WHERE npm='$_GET[npm]'");

if($hapus){
    header('location:data.php');
}else{
    echo "Gagal menghapus data...";
}
?>
