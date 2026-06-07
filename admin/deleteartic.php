<?php
include '../koneksi.php';
$id = $_GET['id'];

// Hapus gambar dari folder
$getImage = $conn->query("SELECT image FROM articles WHERE id = $id")->fetch_assoc();
if ($getImage && file_exists("../" . $getImage['image'])) {
  unlink("../" . $getImage['image']);
}

$conn->query("DELETE FROM articles WHERE id = $id");
header("Location: artikel.php");
?>