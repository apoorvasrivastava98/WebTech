<!DOCTYPE html>
<html>
<body>

<?php
$key="college";
$value="KIET";
setcookie($key,$value,time()+86400);
if(isset($_COOKIE["college"]))
 {
  echo "Your cookie key=$key and value=$value<br>";
 }
 else
 {
  echo "Cookie not found";
 }
?>

</body>
</html>
