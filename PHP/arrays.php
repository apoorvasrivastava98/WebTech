<! -- 9/10/2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Arrays in php</title>
</head>
<body>
<?php
$names=array("Ravi",true,false,"Shinchan",23.45); //INDEXED ARRAY
print_r($names);//Array ( [0] => Ravi [1] => 1 [2] => [3] => Shinchan [4] => 23.45 )
print "<br>".$names[0]; //Ravi
echo "<br>",$names[0];  //Ravi
foreach($names as $value)
{
    echo "<br>",$value; //Ravi
                        //1
                        //
                        //Shinchan
                        //23.45
}
$age=array("Ravi"=>22,"Ram"=>34,"Sham"=>23,"Ashok"=>45);
echo "<br>";
print_r($age); //Array ( [Ravi] => 22 [Ram] => 34 [Sham] => 23 [Ashok] => 45 )
echo "<br>",$age["Ravi"]; //22
echo "<br>",$age[$names[0]]; //22
foreach($age as $key=>$value)
{
    echo "<br>",$key,"=>",$value; //Ravi=>22
                                  //Ram=>34
                                  //Sham=>23
                                  //Ashok=>45
}
$data=array(array(2333,444,56,6),
            array(3,4,5,6));
echo "<br>";
print_r($data); //Array ( [0] => Array ( [0] => 2333 [1] => 444 [2] => 56 [3] => 6 ) [1] => Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 6 ) )
echo "<br>",$data[0][1]; //444
?>
</body>
</html>