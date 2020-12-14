<! -- 13/10/2020 -->
<?php
function getsum($num1,$num2=45)
{
    return ($num1+$num2); 
}
$result=getsum(23,45);
echo "<br>The sum of two numbers is = $result"; //The sum of two numbers is = 68
echo "<br>Sum of two number is=",getsum(67); //Sum of two number is=112
function selfmultiply(&$num1)
{
    $num1=$num1*$num1;
    echo $num1;
}
$mynum=2;
echo "<br>Before=",$mynum; //Before=2
echo "<br>Return value=",selfmultiply($mynum); //Return value=4
echo "<br>After=",$mynum; //After=4
?>