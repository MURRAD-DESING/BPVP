<?php
session_start();
session_destroy();
include 'koneksi.php';
$sql_kategori_terawal =mysqli_query($koneksi,"SELECT id_kategori FROM kategori ORDER BY id_kategori ASC LIMIT 1");
$row=mysqli_fetch_array($sql_kategori_terawal);
$kategori_terawal=$row['id_kategori'];                   
echo"
<script>
alert('Logout berhasil')
window.location.href='../home/index.php?id_kategori=$kategori_terawal'
</script>"; 
?>