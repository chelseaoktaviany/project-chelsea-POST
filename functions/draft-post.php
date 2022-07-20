<?php
//koneksi
include ('../koneksi.php');

//mendapatkan data dari form
$title = $_POST['addTitle'];
$content = $_POST['addContent'];
$category = $_POST['addCategory'];


//query insert data ke dalam database
$query = "INSERT into posts (Title, Content, Category, Status) VALUES ('$title', '$content', '$category', 'Draft')";

//kondisi pengecekan koneksi
if($conn -> query($query)) {
    //redirect ke halaman allpost
    header("location: ../allposts.php");
}else {
    //pesan error
    echo "Data gagal disimpan";
}
?>