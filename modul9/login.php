<?php
    //memulai session selalu diawali dengan session_star();
    session_start();
    error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
    $conn = mysqli_connect('localhost','root','','informatika');
    
    
    
    //identifikasi variabel
    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if ($submit){
        //deklarasi query
        $sql = "SELECT * from user where username = '$username' and password='$password'";
        //mengeksekusi query
        $query = mysqli_query($conn,$sql);
        //mengambil data dalam 1 baris
        $row = mysqli_fetch_array($query);

        if($row['username']!=""){
            //berhasil login
            //deklarasi variabel secara global
            $_SESSION['username']=$row['username'];
            $_SESSION['status']=$row['status'];
?>
    <script language script="JavaScript">
            alert('anda login sebagai <?php echo $row['username']; ?>');
            document.location = 'hasillogin.php';
            </script>";
        <?php
        }else{
        ?>
            <script language script = "JavaScript">
            alert('Gagal login');
            document.location = 'login.php';
            </script>
        <?php    
        }
    }
    ?>

    <form method = 'POST' action ='login.php'>
    <p align ='center'>
    Username : <input type='text', name='username'><br>
    Password : <input type='text', name='password'><br>
    <input type = 'submit', name='submit'> </p>
    </form>