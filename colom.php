<!DOCTYPE html>
<html>
<body>
 
<?php
$NCT = array("Nama Member","Haechan", "Mark Lee", "Jeno");
$year = array("Tahun Lahir","2000","1999","2000");
$color = array("warna Favorit","blue","green","yellow");
$RedValvet = array("Nama Member", "Seulgi", "Irene", "Wendy", "joy", "Yeri");
$music = array("Song List","Psycho","Red Flavor","Feel My Rhythm", "Bad Boy", "Peek-A-Boo");
$aespa = array("Nama Member","Karina", "Winter", "Ningning", "Giselle");
$born = array("Tanggal Lahir","11 April 2000","1 Januari 2001","23 Oktober 2002", "30 Oktober 2000");

echo "<table border='1'>";
for($i=0; $i<=2; $i++){
echo "<tr><td> $NCT[$i] </td><td> $year[$i] </td><td> $color[$i] </td></tr>";
}
echo "</table>";
echo "<br>";

echo "<table border='1'>";
for($i=0; $i<=4; $i++){
echo "<tr><td> $RedValvet[$i] </td><td> $music[$i] </td></tr>";
}
echo "</table>";

echo "<br>";

echo "<table border='1'>";
for($i=0; $i<=3; $i++){
echo "<tr><td> $aespa[$i] </td><td> $born[$i] </td></tr>";
}
echo "</table>";
?>

</body>
</html>