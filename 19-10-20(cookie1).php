<!DOCTYPE html>
<html>
<body>

<?php
$key="Amazon";
$value="price of product 2000/-";
setcookie($key,$value,time()-86400*365*2);
if(isset($_COOKIE["Amazon"]))
 {
  echo "Your cookie key=$key and value=$value<br>";
  header("Location:variables.php");
 }
 else
 {
  echo "Cookie not found";
 }
?>

</body>
</html>
