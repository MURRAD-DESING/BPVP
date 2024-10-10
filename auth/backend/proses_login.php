<?php
include 'koneksi.php';
if (isset($_POST['login'])) {
    $level= $_POST['level'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    if ($level=='alumni') {
        // Login alumni
        // cek email alumni dan password
        $cek_login= mysqli_query($koneksi,"SELECT * FROM alumni WHERE email ='$email' and password='$password'");
        if ($cek_login) {  
            $item = mysqli_fetch_array($cek_login);
            session_start();
            $_SESSION['IsLogin']=true;  
            $_SESSION['level']='alumni';   
            $_SESSION['id_login']= $item['id_alumni'];    
                
        echo"
        <script>
        alert('Login Berhasil')
        window.location.href='../dashboard_alumni/index.php?opsi=1'
        </script>"; 
        }else{                       
        echo"
        <script>
        alert('Login Gagal')
        window.location.href='../home/login.php'
        </script>"; 
        }
    }else{
        // Login user
        // cek email user
        
        $cek_login= mysqli_query($koneksi,"SELECT * FROM user WHERE email ='$email' and password='$password'");
        if ($cek_login) {   
            $item = mysqli_fetch_array($cek_login);                  
            session_start();
            $_SESSION['IsLogin']=true;  
            $_SESSION['level']='alumni';   
            $_SESSION['id_login']=$item['id_user'];   
            
            $sql_kategori_terawal =mysqli_query($koneksi,"SELECT id_kategori FROM kategori ORDER BY id_kategori ASC LIMIT 1");
            $row=mysqli_fetch_array($sql_kategori_terawal);
            $kategori_terawal=$row['id_kategori'];
        echo"
        <script>
        alert('Login Berhasil')
        window.location.href='../home/index.php?id_kategori=$kategori_terawal'
        </script>"; 
        }else{                       
        echo"
        <script>
        alert('Login Gagal')
        window.location.href='../home/login.php'
        </script>"; 
        }
    }
}

if (isset($_POST['login_admin'])) {
    $email= $_POST['email'];
    $password= $_POST['password'];
    if ($email=='admin@gmail.com' and $password=='admin123') { 
            session_start();
            $_SESSION['IsLogin']=true; 
        echo"
        <script>
        alert('Login Berhasil')
        window.location.href='../dashboard/index.php?opsi=1'
        </script>"; 
    }else{                       
        echo"
        <script>
        alert('Login Gagal')
        window.location.href='../home/login.php'
        </script>"; 
        }
    }
?>