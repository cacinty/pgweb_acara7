<!DOCTYPE html>
<html>
<body>
 
<?php
$favcolor = "pink";

switch ($favcolor) {
  case "red":
    echo "My favorite color is red!";
    break; #jika tidak dikasih break maka nilai sebelumnya akan ikut ter eksekusi
  case "pink":
    echo "My favorite color is pink!";
    break;
  case "green":
    echo "My favorite color is green!";
    break;
  default:
    echo "My favorite color is neither red, pink, nor green!";
}
?>

</body>
</html>