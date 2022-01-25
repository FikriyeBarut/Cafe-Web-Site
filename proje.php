<!DOCTYPE html>
<html>
<head>
<title>LOTUS CAFE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="https://cdn.crello.com/api/media/medium/228602002/stock-photo-red-lotus-flowers-isolated-illustration">
<meta name="keywords" content="cafe,lotus,beşiktaş">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("arka.png");
  min-height: 75%;
}
.menu {
  display: none;
}
#tablo1{
    width:700px;
    border-color: rgb(255, 160, 235);
    border-style: inset;
    margin-left: auto;
    margin-right: auto;
  }
  .insert{
      background-color:black;
  }

</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#home" class="w3-button w3-block w3-black">ANASAYFA</a>
    </div>
        <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">HAKKIMIZDA</a>
    </div>
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">İLETİŞİM</a>
    </div>
     
   
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">09.00-24.00</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-black" style="font-size:90px"><strong>LOTUS <br> CAFE</strong></span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Beşiktaş</span>
  </div>
</header>



 


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">
<!-- Hakkımızda Bölümü -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">HAKKIMIZDA</span></h5>
    <p>Proje, bir cafe web sitesidir.Kadıköy,Karaköy ve Beşiktaş'ta bulunan şubeleriyle daha iyi hizmet vermek için müştelerine güzel bir web sitesi tasarımıyla kolay,anlaşılabilir bir site sunmaktır.Müştelerimiz aynı zamanda web sitemizden rezervasyon yaparak misafirimiz olabilirler.Ayrıca admin kullanıcısı menüye ait çeşitli değişikliler de yapabilmektedir. </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>İletişim kısmından bize ulasabilir,aynı zamanda formu doldurarak rezervasyon yaptırabilirsiniz.</i></p>
    </div>
    <img src="mekan.jpeg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Açık Saatler:</strong>Her gün 09.00-24.00.</p>
    <h5 class="w3-center" style="border:2px solid Tomato;">Neden Lotus?</h5>
    <p>Lotus çiçeği, en çok karşılaştığımız ve anlamı derin olan simgelerdendir. Nelumbonaceae ailesinin üyesi olan lotus, mitolojide de kendine yer edinmiştir. Topraktan bağımsız olarak, su yüzeyinde yaşayan lotus bitkisi, taze, tertemiz ve berrak bir görünüme sahiptir.</p>
    <p>Geceleri yapraklarını kapatan lotus çiçeği, gün doğumuyla beraber açılmaya başlar ve güneşe merhaba der. Yapraklarının yapısından ötürü tozu ve kiri tutmayan lotus çiçeği, kendini temizleyerek her daim saf ve duru bir görünüm sunar.</p>
    <div align="center">
        <img src="https://cdn.pixabay.com/photo/2016/12/07/15/50/lotus-1889735_960_720.png" style="" alt="lotus" width="400" class="w3-margin-top">
    </div>
    <p>Lotus çiçeğinin farklı renkleri farklı anlamlar taşır. Saflığın simgesi olan beyaz lotus çiçeğinin yanı sıra, sevgi ve tutkunun simgesi olan kırmızı lotus çiçekleri de bulunuyor. Pembe lotus çiçeği, aydınlanmayı temsil ederken, mavi lotus çiçeği ise bilgeliğin sembolü olmuştur.
    </p>
    <p>Biz de lotus çiçeğinin bu güzel ve derin anlamından esinlenerek cafemize <strong>Lotus</strong> ismini vermek istedik.</p>
  </div>
</div>

<!-- Menu Kısmı -->

<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">MENU</span></h5>
    
<!-- Menu kısmı -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <!--<h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Menu</h1>-->
    
    <!-- Menüde ürün arama kısmı-->
      <h1 class="w3-center w3-jumbo" style="margin-bottom:5px">Ürün Arama</h1>
    <form method=POST action="arama.php" id="frmMenu">
            <table align="center">
                <tr><td>Adına Göre</td><td><input type="text" name="UrunAdi" id="UrunAdi"></td></tr>
                <tr><td>Çeşidine Göre</td>
                    <td><select name="Cesit" id="Cesit">
                    <option id ="Menu" value="Menu"></option>
                    <option id="Yiyecek" value="Yiyecek">Yiyecekler</option>
                    <option id="Icecek" value="Icecek">Icecekler</option>
                    <option id="Tatli" value="Tatli">Tatlilar</option>
                </select></td></tr>
                
                <tr>
                    <td><a class='w3-button w3-theme-d4 w3-hover-theme w3-round-xlarge' href=urunEkle.php>EKLE</a></td>
                    <td><input type="submit" value="ARA" onclick="menu()" class="w3-button w3-theme-d4 w3-hover-theme w3-round-xlarge"></td>
                </tr>   
               </table>
        </form>
 
    
    
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Yiyecekler');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Yiyecekler</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Icecekler');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Icecekler</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Tatlilar');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Tatlilar</div>
      </a>
    </div>

    <div id="Yiyecekler" class="w3-container menu w3-padding-32 w3-white">
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

 
    $sql3 = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId= Cesit.Id WHERE CesitAdi='Yiyecek' ";
    $result = $conn->query($sql3);
        
    echo"<form method=POST action='' id='frmYiyecekler' target='frmYiyecekler'>";
    echo "<table>".
    "<tr>".
    "<td>Adi</td>".
    "<td>Fiyat</td>".
    "</tr>";

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>" . "<td>". $row["Adi"]."</td>"."<td>".'<span class="w3-right w3-tag w3-dark-grey w3-round">'.$row["Fiyat"].' TL</span>'."</td>".
        "<td><a class='w3-button w3-white w3-hover-blue-grey w3-round-xlarge w3-tiny' href=guncelle.php?MenuId=".$row['MenuId']."> Güncelle</a></td>"."</tr>";
    
    }
    echo "</table>";
    echo "</form>";
} 
else {
    echo "0 results";
}

?>
    </div>
    
    
  
  
    <div id="Icecekler" class="w3-container menu w3-padding-32 w3-white">
        
      <?php
        $sql2 = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId= Cesit.Id WHERE CesitAdi='Icecek' ";
        $result = $conn->query($sql2);
     echo "<table>".
    "<tr>".
    "<td>Adi</td>".
    "<td>Fiyat</td>".
    "</tr>";
       
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               echo "<tr>" . "<td>". $row["Adi"]."</td>"."<td>".'<span class="w3-right w3-tag w3-dark-grey w3-round">'.$row["Fiyat"].' TL</span>'."</td>".
               "<td><a class='w3-button w3-white w3-hover-blue-grey w3-round-xlarge w3-tiny' href=guncelle.php?MenuId=".$row['MenuId']."> Güncelle</a></td>"."</tr>";
            }
        } 
        else {
            echo "0 results";
        }

        echo "</table>";
        ?>
   
    </div>




    <div id="Tatlilar" class="w3-container menu w3-padding-32 w3-white">
        
        <?php
        $sql3 = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId= Cesit.Id WHERE CesitAdi='Tatli' ";
        $result = $conn->query($sql3);
        
        
 echo "<table>".
    "<tr>".
    "<td>Adi</td>".
    "<td>Fiyat</td>".
    "</tr>";
       
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>" . "<td>". $row["Adi"]."</td>"."<td>".'<span class="w3-right w3-tag w3-dark-grey w3-round">'.$row["Fiyat"].' TL</span>'."</td>".
                "<td><a class='w3-button w3-white w3-hover-blue-grey w3-round-xlarge w3-tiny' href=guncelle.php?MenuId=".$row['MenuId']."> Güncelle</a></td>"."</tr>";
            }
        } 
        else {
            echo "0 results";
        }

        echo "</table>";
        ?>
     </div>
     <br>

  </div>
</div>



  </div>
</div>





<!-- İletişim kısmı -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
      <br>
      <br>
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">İLETİŞİM</span></h5>
    <img src="telefon.jpg" class="w3-image" style="width:100%">
   <p><strong>Telefon : </strong>0212 244 44 44</p>
        <p><strong>E-Mail : </strong>lotus.cafe@gmail.com</p>
        <address>Çiçek sokak Bebek mahallesi no:9 <br>Beşiktaş/İstanbul </address>
        <br>

<h2 style="color:red; text-align:center;">Rezervasyon Formu</h2>
<form action="form.php " target="_blank"  id="kayit" method=POST>
<table>
	<tbody>
		<tr>
			<td>Ad:</td>
			<td><input name="ad" id="adi" placeholder="Adınızı giriniz." type="text" /></td>
		</tr>
		<tr>
			<td>Soyad:</td>
			<td><input name="soyad" id="soyadi" placeholder="Soyadınızı giriniz."  type="text" /></td>
		</tr>
		<tr>
			<td>Telefon:</td>
			<td><input name="numara" id="numara" placeholder="(5..)... .. .." required="" type="number" /></td>
		</tr>
		<tr>
			<td>E-Mail:</td>
			<td><input name="email" id="email" placeholder="....@gmail.com"  type="email" /></td>
		</tr>
		<tr>
			<td>Misafir Sayısı:</td>
			<td><input name="sayi" id="sayi" placeholder="Misafir sayısını belirtiniz." type="number" /></td>
		</tr>
		<tr>
			<td>Tarih-Saat:</td>
			<td><input name="tarih" id="tarih" type="datetime-local" /></td>
		</tr>
		<tr>
			<td>Şube:</td>
			<td><select name="sube"><option value="besiktas">Beşiktaş</option><option value="karakoy">Karak&ouml;y</option><option value="kadiköy">Kadık&ouml;y</option> </select></td>
		</tr>
		<tr>
			<td>Rezervasyon Türü:</td>
			<td><select name="etkinlik">
			    <option value="selected"></option>
			    <option value="dogumgunu">Doğum G&uuml;n&uuml;</option>
			    <option value="yildonumu">Yıl D&ouml;n&uuml;m&uuml;</option>
			    <option value="mezuniyet">Mezuniyet</option>
			    <option value="ozel">&Ouml;zel</option>
			    <option value="diger">Diğer</option> </select></td>
		</tr>
		<tr>
			<td>Herhangi bir<br />
			Ozel isteğiniz:</td>
			<td><textarea cols="15" name="mesaj" rows="5" placeholder="Özel isteklerinizi varsa belirtebilirsiniz."></textarea></td>
		</tr>
		<tr>
			<td>Etkinlik:</td>
			<td>
			 <input name="detay" type="radio" />Surpriz
			<input name="detay" type="radio" />Surpriz Değil</td>
		</tr>
		<tr>
			<td>İletişim:</td>
			<td> <input id="iletisim" name="iletisim" type="checkbox" /> E-Mail <input name="tel" type="checkbox" /> Telefon</td>
		</tr>
		<tr>
			<td><input type="reset" value="Temizle"></td>
			<td><input type="button" value="Gönder" onclick="control()" /></td>
			<td></td><input type="hidden"  name="action" value=" "></td>
		</tr>
	</tbody>
</table>
</form>

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

   
?>


<?php
$conn -> close();
?>

</div>
</div>
</div>

<script>
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

	<script>
		function control(){
            adi=document.getElementById("adi").value;
            if(adi.length==0){
            alert("Ad girilmeli !");
            return false;
            }
           
            if (adi.length>15){
				alert("Ad 15 karakterden fazla olamaz !");                
            return false;
            }
            soyadi=document.getElementById("soyadi").value;
            if(soyadi.length==0){
            alert("Soyad girilmeli !");
            return false;
            }
            if (soyadi.length>15){
			alert("Soyad 15 karakterden fazla olamaz !");                
            return false;
            }
            numara=document.getElementById("numara").value;
            if(numara.length==0){
            alert("Numara alani girilmeli !");
            return false;
            }
            email=document.getElementById("email").value;
            if(email.length==0){
            alert("Email alanı girilmeli !");
            return false;
            }
            sayi=document.getElementById("sayi").value;
            if(sayi.length==0){
            alert("Misafir sayısı girilmeli !");
            return false;
            }
            else
			{document.getElementById("kayit").submit();
            }
        }
    </script>

</body>
</html>