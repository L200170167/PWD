<html>
    <head>
        <title>Program Penjumlahan</title>
    </head>
    <body>
        <form method="POST" action="tugas.php">
            <p>Nilai A adalah : <input type="text" name="nilaiA" size="3"></p>
            <p>Nilai B adalah : <input type="text" name="nilaiB" size="3"></p>
            <p><input type="submit" name="submit" value="jumlahkan"></p>
        </form>

        <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $nilaiA = $_POST['nilaiA'];
        $nilaiB = $_POST['nilaiB'];
        $submit = $_POST['submit'];
        $jumlah = $nilaiA+$nilaiB;
        if($submit){
            echo "</br>Nilai A adalah $nilaiA";
            echo "</br>Nilai B adalah $nilaiB";
            echo "</br>jadi nilai A ditambah nilai B adalah $jumlah";
        }
        ?>  
    </body>
</html>