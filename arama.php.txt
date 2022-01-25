<?php
    
    $CesitAdi=$_POST["Cesit"];
    $UrunAdi=$_POST["UrunAdi"];
    
    if($CesitAdi=="Yiyecek"){
        $CesitAdi="Yiyecekler";
        $CesitId=1;
    }
    
    if($CesitAdi=="Icecek"){
        $CesitAdi="Icecekler";
        $CesitId=2;
    }
    
    if($CesitAdi=="Tatli"){
        $CesitAdi="Tatlilar";
        $CesitId=3;
    }
    if($CesitAdi=="bos"){
        $CesitId=0;
    }
    ?>
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
      <a href="#menu" class="w3-button w3-block w3-black">ADMİN SAYFASINA HOŞGELDİNİZ</a>
    </div>
   

  </div>
</div>

<!-- Menu Modal -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:800px">
      
<!-- Menu kısmı -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Menu</h1>
      <h1 class="w3-center w3-jumbo" style="margin-bottom:10px">Ürün Arama</h1>
    
            <form method=POST action="arama.php" id="frmMenu">
            <table align="center" >
                <tr><td>Ad</td><td><input type="text" name="UrunAdi" id="UrunAdi" value="<?php echo "$UrunAdi"; ?>"></td></tr>
                <tr>
                    <td>Çeşit</td>
                    <td><select name="Cesit" id="Cesit">
                    <?php 
                        if($CesitAdi=="Menu"){
                                echo "<option id ='Menu' value='Menu' selected></option>" ;                       
                        }
                        else{
                            echo "<option id ='Menu' value='Menu'></option>" ;}//bos
                            
                        if($CesitAdi=="Yiyecekler"){
                                echo "<option id='Yiyecek' value='Yiyecek' selected>Yiyecekler</option>" ;                       
                        }
                        else{
                            echo "<option id='Yiyecek' value='Yiyecek'>Yiyecekler</option>" ;}//yiyecek
                     
                        if($CesitAdi=="Icecekler"){
                                echo "<option id='Icecek' value='Icecek' selected>Icecekler</option>" ;                       
                        }
                        else{
                            echo "<option id='Icecek' value='Icecek'>Icecekler</option>" ;}//içecek

  
                        if($CesitAdi=="Tatlilar"){
                                echo "<option id='Tatli' value='Tatli' selected>Tatlilar</option>" ;                       
                        }
                        else{
                            echo "<option id='Tatli' value='Tatli'>Tatlilar</option>" ;}//tatli
                        ?>
                </select></td>
                    
                    
                </tr>

                <tr>
                    <td><a class='w3-button w3-theme-d4 w3-hover-theme w3-round-large' href="http://bim457.online/19090700006/Final/proje.php">AnaSayfa</a></td>
                    <td ><input type="submit" value="ARA" onclick="menu()" class="w3-button w3-theme-d4 w3-hover-theme w3-round-xlarge"></td>
                </tr>   
               
            </table>
        </form>


    
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Aranan' );" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-blue"><?php echo "$CesitAdi"; ?></div>
      </a>
    </div>

    <div id="Aranan" class="w3-container menu w3-padding-32 w3-white">
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
        
        if($CesitId==0 && $UrunAdi==""){
            $sql_ara="SELECT * FROM Menu JOIN Cesit ON Menu.CesitId=Cesit.Id ";
        }
        elseif($CesitId!=0 && $UrunAdi=="")
            $sql_ara = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId=Cesit.Id WHERE CesitId='$CesitId' ";
        elseif($CesitId!=0 && $UrunAdi!="")
            $sql_ara = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId=Cesit.Id WHERE Adi like '%$UrunAdi%' ";
        elseif($CesitId==0 && $UrunAdi!="")
            $sql_ara = " SELECT * FROM Menu JOIN Cesit ON Menu.CesitId=Cesit.Id WHERE Adi like '%$UrunAdi%' ";
        $result = $conn->query($sql_ara);
        
        echo"<form method=POST action='' id='frmYiyecekler' target='frmYiyecekler'>";
         echo "<table align=center>";   
    
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["MenuId"]."</td>" . "<td>". $row["Adi"]."</td>"."<td>".'<span class="w3-left w3-tag w3-theme-d4 w3-round-xlarge">'.$row["Fiyat"].' TL</span>'."</td>".
            "</tr>";
        }
        
        echo "</table>";
        echo "</form>";
        }
        else{
            echo "Ürün listede yok!";
        }
        ?></div>
     <br>
     
        </div>
    </div>
    
  </div>

</div>

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
