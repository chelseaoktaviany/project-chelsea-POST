<?php
include ('../koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM posts WHERE Id='$id'";

if($conn -> query($query)){
    header("location: ../allposts.php");
}else {
    //pesan error gagal update data
    echo "Data gagal dipindahkan ke trash.";
}
?>