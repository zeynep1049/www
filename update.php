<html>
<head>

 <form action="update.php" method="POST">
  <center>
  <p>
   BU AYIN GELIRINI GIRINIZ.
  </p><br>
  <input name="gelir" type="text"><br><br>
   <p>
   BU AYIN MALIYETINI GIRINIZ.
  </p><br>
  <input name="maliyet" type="text"><br><br>
  <input type="submit" value="KAR HESAPLA">
  
  
  </center>
</form>
</head>
<body background="deneme.jpg" text="black">
<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);

  $gelir = $_POST["gelir"];
  $maliyet = $_POST["maliyet"];
  $sonuc = $gelir-$maliyet;
  $karorani = $sonuc/100;
  
  while ($gelir==TRUE) {
    $sonuc;
    echo "Bu ayin kari <b>: ".$sonuc."</b> Liradır.<br />";
    echo "Kar orani : <b>".$karorani."</b><br />";
    echo "Maliyet Degeri : <b>".$maliyet."</b> Liradır.<br />";
    break;	
  }
 ?>
</body>
 
</html>
 
