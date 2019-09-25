<html>
    <head>
        <title>Program Penjumlahan</title>
    </head>
    <body>
        <form method="POST" action="tugas2.php">
            <p>Angka : <input type="text" name="angka" size="3"></p>
            <p><input type="submit" name="submit" value="submit"></p>
        </form>

        <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $angka = $_POST['angka'];
        $submit = $_POST['submit'];
        if($submit){
            if($angka%2=='0'){
            echo "</br>Angka $angka adalah bilangan genap";
            }else{
            echo "</br>Angka $angka adalah bilangan ganjil";
            }
        }
        ?>  
    </body>
</html>