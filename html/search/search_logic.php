<?php
$connection=mysqli_connect("localhost","root","");
mysqli_select_db($connection, "my_db");
if(isset($_GET['search'])){
    $search_value = $_GET['value'];
    $query = "select * from obiective where Keywords like '%$search_value%'";
    $resourceResult = mysqli_query($connection, $query);
    while ($row=mysqli_fetch_array($resourceResult)){
        $name = $row['Obiectiv_Nume'];
        $locatie = $row['Obiectiv_Locatie'];
        $descriere = $row['Obiectiv_Descriere'];
        $oda = $row['Obiective_din_apropiere'];
        echo "<h1 style='color: white;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$name</h1>";
        echo "<p style='color: white;'>&nbsp;&nbsp;&nbsp;&nbsp;Locatie: $locatie</p>";
        echo "<p style='color: white;'>&nbsp;&nbsp;&nbsp;&nbsp;Descriere: $descriere</p>";
        echo "<p style='color: white;'>&nbsp;&nbsp;&nbsp;&nbsp;Obiective din apropiere: $oda</p>";
    }
}