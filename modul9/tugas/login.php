<?php
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $koneksi = mysqli_connect('localhost','root','','informatika');

    $username=$_POST['username'];
    $password=$_POST['password'];
    $submit=$_POST['submit'];

    if($submit){
        $sql="select * from user where Username='$username' and Password='$password'";
        $query=mysqli_query($koneksi,$sql);
        $cek=mysqli_num_rows($query);
        if($cek>0){
            $row = mysqli_fetch_assoc($query);
            if($row['status']=='Administrator'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Administrator';
                header("location:admin.php");
            }elseif($row['status']=='Member'){
                $_SESSION['username']=$row['username'];
                $_SESSION['status']='Member';
                header("location:member.php");
            }
        }else{
            echo "<script>
                    alert('Login Gagal, silahkan coba lagi');
                    document.location='login.php';
                  </script>";
        }
    }
?>

<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="kotak_login">
        <p class="tulisan_login"><b>LOG-IN</b></p>
        <form action="login.php" method="POST">
            <label><b>Username</b></label><br><br>
            <input type="text" name="username" id="username" class="form_login" placeholder="tulis woi">
            <label><b>Password</b></label><br><br>
            <input type="password" name="password" id="password" class="form_login" placeholder="tulis woi">
            <input type="submit" value="Masuk" name="submit" id="submit" class="tombol_login">
            <br><br>
        </form>
    </div>
</body>
</html>