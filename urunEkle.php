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
      <a href="#menu" class="w3-button w3-block w3-black">ADMIN SAYFASINA HOŞGELDİNİZ</a>
    </div>
  
  </div>
</div>


 <!-- Menu Kısmı -->

<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:900px">
      <br>
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">MENU</span></h5>
    
<!-- Menu kısmı -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <!--<h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Menu</h1>-->
    
    <!-- Menüde ürün ekleme kısmı-->
      <h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Ürün Ekleme</h1>
    
    <form method=POST action="" id="frmGuncel" >
            <table align="center" >
  
             <tr><td>Ürün Adı</td><td><input type="text" name="UrunAdi" id="UrunAdi"></td></tr>
             <tr><td>Ürün Fiyatı</td><td><input type="text" name="UrunFiyati" id="UrunFiyati" ></td></tr> 
                <tr><td>Çeşidi</td>
                    <td><select name="sec" id="sec">
                    <option id="Yiyecek" value="Yiyecek">Yiyecekler</option>
                    <option id="Icecek" value="Icecek">Icecekler</option>
                    <option id="Tatli" value="Tatli">Tatlilar</option>
                </select></td></tr>               
            

                <tr>
                    <td><a class='w3-button w3-theme-d4 w3-hover-theme w3-round-large' href="http://bim457.online/19090700006/Final/proje.php">AnaSayfa</a></td>
                    <td><a class='w3-button w3-theme-d4 w3-hover-theme w3-round-large' href=arama.php>Menü</a></td>
                    <td ><input class="w3-button w3-theme w3-hover-blue-grey w3-round-large" type="submit" value="EKLE"></td>
                </tr>   
               
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

        $UrunAdi = $_POST["UrunAdi"];
        $UrunFiyati = $_POST["UrunFiyati"];
        $sec = $_POST["sec"];
        
        if($sec=="Yiyecek")
            $CesitId=1;
        if($sec=="Icecek")
            $CesitId=2;
        if($sec=="Tatli")
            $CesitId=3;
    
    
        
        $sql = "INSERT INTO Menu  (Adi, Fiyat, CesitId) VALUES ('$UrunAdi', '$UrunFiyati', '$CesitId')";
        
        
        if ($conn->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
 
?>
    
    
  
  

<?php
$conn -> close();
?>



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



</body>
</html>