<!DOCTYPE html>
<html>
<body>
 
<?php
$d = 12;       // Integer
$e = 12.01;    // Float
$f = "ini caca"; // String
$a = true;    // Boolean
$k = NULL;    // NULL

$d = (string) $d;
$e = (string) $e;
$f = (string) $f;
$a = (string) $a;
$k = (string) $k;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($k);
?>

</body>
</html>