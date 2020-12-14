<! -- 8/10/2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Statements in php</title>
</head>
<body>
<?php
$i=10;
//Simple or Single Line Statement
echo "Value of i = $i";
//Conditional Statement IF ELSE
if($i==1)
{
    echo "<br>This is true value of i=$i";
}
elseif($i==10)
{
    echo "<br>This is big value of i=$i";
}
else
{
    echo "<br>This is not true value of i=$i";
}
//Conditional Statement TERNARY OPERATOR 
echo ($i>10)?"<br>This is greater than 10":"<br>This is smaller than 10";
//Looping FOR LOOP
for($i=1;$i<11;$i++)
{
    echo "<br>This is for loop and i=$i";
}