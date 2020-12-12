<!DOCTYPE html>
<html>
<body>

<?php
$key="Flipkart";
$value="Big Billion Days Sale";
setcookie($key,$value,time()+8);
if(isset($_COOKIE["Flipkart"]))
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
