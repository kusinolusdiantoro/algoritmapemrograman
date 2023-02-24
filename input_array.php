<html>
    <head>
        <title>Membalikkan Kata</title>
        <h2>Masukkan Nama Mahasiswa</h2>
<form action="proses_array.php" method="POST"><ol>
    <?php 
    for ($i=1; $i <= 3 ; $i++) { 
        echo "<li><input type = 'text' name='nama[$i]'<br>";
    }
     ?>

</ol> <input type="submit" name="TAMPILKAN"/></form>
</html>