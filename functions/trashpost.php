<?php
//koneksi
include ('../koneksi.php');

//mendapatkan data dari form
$id = $_GET['id'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE posts SET Status = 'Trashed' WHERE Id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn -> query($query)){
    header("location: ../allposts.php");
}else {
    //pesan error gagal update data
    echo "Data gagal dipindahkan ke trash.";
}
?>