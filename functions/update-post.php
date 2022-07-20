<?php
//koneksi
include ('../koneksi.php');

//mendapatkan data dari form
$id = $_POST['idPostEdit'];
$title = $_POST['titlePostEdit'];
$content = $_POST['contentPostEdit'];
$category = $_POST['categoryPostEdit'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE posts SET Title = '$title', Content = '$content', Category = '$category', Status = 'Published' WHERE Id = '$id'";


//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn -> query($query)){
    header("location: ../allposts.php");
}else {
    //pesan error gagal update data
    echo "Data gagal diupdate.";
}
?>