<h3>Hitung Volume Bola</h3>

<p>Masukkan nilai jari-jari bola.</p>
<form action="volume-bola.php" method="post">
  Jari : <input type="text" name="jari2"><br><br>
  <input type="submit" name="submit" value="Hitung">
</form>
 
<?php
  if(isset($_POST['submit'])){
    $jari = $_POST['jari2'];
    $phi = 22/7;
    
    $volume = 4/3 * $phi * $jari * $jari * $jari; 

    echo "Bola yang memiliki jari - jari : $jari<br>";
    echo "Maka memiliki volume: $volume";
  }
?>