<?php

$dbServerName = "185.106.210.2";
$dbUsername = "seyitka1_19090700006";
$dbPassword = "HUpsfb123.";
$dbName = "seyitka1_19090700006";

// create connection
$conn = new mysqli($dbServerName, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//echo "Connected successfully";
$conn -> set_charset("utf8");


   
   $Ad=$_POST["ad"];
   $Soyad=$_POST["soyad"];
   $Tel=$_POST["numara"];
   $Mail=$_POST["email"];
   $Sayi=$_POST["sayi"];
   $Tarih=$_POST["tarih"];
   $Sube=$_POST["sube"];
   $Etkinlik = $_POST["etkinlik"];
   $Mesaj=$_POST["mesaj"];
   $Detay=$_POST["detay"];
   $Iletisim=$_POST["iletisim"];
 

 if($action!=" "){
     if($Ad!=" "){
          $sqlll = "INSERT INTO Form(ad,soyad,numara,email,sayi,tarih,sube,etkinlik,mesaj,detay,iletisim)
                       VALUES ('$Ad','$Soyad','$Tel','$Mail','$Sayi','$Tarih','$Sube','$Etkinlik','$Mesaj','$Detay','$Iletisim')";
                      $bayrak=0;
          if ($conn->query($sqlll)===TRUE)
              {
                 echo "--En kısa sürede sizinle iletişime geçeceğiz.---"."<br>";
                 $bayrak=1;
               
       
          }
      }
   }

 $conn -> close();  
?>


<html>
<head>
    <title>Form Kayit</title>
    <meta hhtp-equiv="Content-type" content="text/html" charset="utf-8">
    <meta hhtp-equiv="Content-Language" content="tr" >
    <style>
        body{
    background-image: url(https://images.pexels.com/photos/934011/pexels-photo-934011.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
}
h1{
    color:DarkMagenta;
    font-family:verdana;
    text-align:center;
}
#duzen{
    text-align:center;
     font-size: 18px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}
p{
    text-align:center;
    font-size:20px;
    font-family:Times New Roman", Times, serif;
}


    </style>
</head>
<body>
    <h1>Form Bilgileriniz</h1>
<div id="duzen">
<?php
echo "Ad: ";
echo $_POST["ad"]."<br>";
echo "Soyad: ";
echo $_POST["soyad"]."<br>";
echo "Numara: ";
echo $_POST["numara"]."<br>";
echo "E-mail: ";
echo $_POST["email"]."<br>";
echo "Misafir Sayısı: ";
echo $_POST["sayi"]."<br>";
echo "Tarih:";
echo $_POST["tarih"]."<br>";
echo "Şube: ";
echo $_POST["sube"]."<br>";
echo "Etkinlik: ";
echo $_POST["etkinlik"]."<br>";
echo "Mesajınız: ";
echo $_POST["mesaj"]."<br>";
echo "Etkinlik Detayı: ";
echo $_POST["detay"]."<br>";
echo "İletişim şekli: ";
echo $_POST["tel"]."<br>";

?>
</div>
<p>
    Yukarıda belirttiğiniz bilgiler ile rezervasyon kaydınız alınmıştır.Sizinle iletişime geçeceğiz.<br>Teşekkür ederiz.
</p>
<p style="font-size:48px">
        &#128512; &#128516; &#128525; &#128151;
        </p>

</body>
</html>