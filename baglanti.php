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


$sql = "SELECT * FROM Menu";


if(isset($_POST['search'])){
    $search_term= mysql_real_escape_string($_POST['search_box']);
    $sql .= "AND Cesit.CesitAdi = '{ $search_term}' ";
    
}
$sql = "SELECT 	* FROM Menu JOIN Cesit ON Menu.CesitId= Cesit.Id";
$result = $conn->query($sql);


echo "<form name='search_form' method='POST' action='baglanti.php'>".
"Fiyata Gore Siralama : <input type='checkbox' name='search_box1' id='search_box1' value='Fiyat' />"."<br>".
"Cesite Gore Siralama : <input type='checkbox' name='search_box1' id='search_box1' value='Cesit' />"."<br>".
" <input type='submit' name='search' id='search' value='Sirala' />".
"</form>";


 echo "<table>".
    "<tr>".
    "<td>Id</td>".
    "<td>Adi</td>".
    "<td>Cesit Adi</td>".
    "<td>Fiyat</td>".
    "</tr>";

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>" ."<td>". $row["Id"]."</td>". "<td>". $row["Adi"]."</td>"."<td>". $row["CesitAdi"]."</td>"."<td>". $row["Fiyat"]."</td>"."</tr>";
    
    }
    echo "</table>";
} 
else {
    echo "0 results";
}


?>