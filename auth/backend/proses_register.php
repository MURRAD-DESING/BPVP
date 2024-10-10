<?php
include 'koneksi.php';
if (isset($_POST['register'])) {
    $nama= $_POST['nama'];
    $level= $_POST['level'];
    $email= $_POST['email'];
    $alamat= $_POST['alamat'];
    $password= $_POST['password'];
    $no_hp= $_POST['no_hp'];
    if ($level=='alumni') {
        // sebagai alumni
        $cek_email=mysqli_query($koneksi,"SELECT * FROM alumni WHERE email='$email'");
        if ($cek_email) {        
            $daftar= mysqli_query($koneksi,"INSERT INTO alumni VALUES ('','$nama','$email','$password','$no_hp','$alamat','nonaktif')");
            echo $level;
            echo"
            <script>
            alert('Registrasi Berhasil')
            window.location.href='../home/login.php'
            </script>";
        }else{
            echo"
            <script>
            alert('Registrasi Gagal, Email sudanh digunakan')
            window.location.href='../index.php'
            </script>";

        }

    }else{
        // sebagai user
        $cek_email=mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email'");
        if ($cek_email) {        
            $daftar= mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nama','$email','$password','$no_hp','$alamat')");
            echo"
            <script>
            alert('Registrasi Berhasil')
            window.location.href='../home/login.php'
            </script>";
        }else{
            echo"
            <script>
            alert('Registrasi Gagal, Email sudanh digunakan')
            window.location.href='../index.php'
            </script>";

        }
    }   



    // ubah status alumni
    }
    if (isset($_POST['ubah_status'])) {
        $id_alumni= $_POST['id_alumni'];
        if ($_POST['status']=='Aktif') {

            $ubah= mysqli_query($koneksi,"UPDATE alumni SET status='Nonaktif' WHERE id_alumni='$id_alumni'");
            echo $id_alumni;
            echo $_POST['status'];
            echo"<script>
            window.location.href='../dashboard/alumni.php?status=Aktif'
            </script>";
        } else{
            $ubah= mysqli_query($koneksi,"UPDATE alumni SET status='Aktif' WHERE id_alumni='$id_alumni'");
            echo"$id_alumni";
            
            echo $_POST['status'];
            echo"<script>
            window.location.href='../dashboard/alumni.php?status=Nonaktif'
            </script>";            
        }
    }

    
?>