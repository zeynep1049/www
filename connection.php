
<?php
 $sube = $_POST['Sube_id'];
 $isim = $_POST['Calisan_isim'];
 $Ilce = $_POST['ILCE'];
 $maliyet = $_POST['Maliyet_tutari'];
 $gelir = $_POST['Gelir_tutari'];
 $mail= $_POST['Email'];
 $sifre= $_POST['Pass'];
 
 
$baglan=mysqli_connect("localhost","root","","starbucks"); 
mysqli_set_charset($baglan, "utf8");
 
$sql="select sube_id from starbucks_kds WHERE sube_id='$sube'";
 
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);
 
if ($satirsay>0)
{
echo "Bu TC Kimlik No daha önce kaydedilmiş";
 
} else{
$sqlekle="INSERT INTO starbucks_kds( sube_id, calisan_isim, ilce, maliyet_tutari, gelir_tutari,email,pass) 
VALUES ('$sube','$isim','$Ilce','$maliyet','$gelir','$mail','$sifre')";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
};
 
?>

 