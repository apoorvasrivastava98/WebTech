<html>
<head>
<title>
Delete Data 
</title>
</head>
<body>
<h1>Insert ID to Delete Student Information</h1>
<form action="deletedata.php" method="post">
<input type="text" name="sid" placeholder="Enter student id"><br><br>
<input type="submit" name="Delete" value="Delete">
<input type="reset" name="Clear"><br><br>
</form>
</body>
</html>
<?php
 if(isset($_REQUEST["Delete"]))
 {
   $hostname="localhost";
   $username="root";
   $pwd="";
   $dbname="WebTechPHP";
   $sid=(int)$_REQUEST["sid"];
      
   $dquery="delete from Student1 where sid=$sid";
   $conn=new mysqli($hostname,$username,$pwd,$dbname);
   if($conn->connect_error)
   {
       die("Error in connection".$conn->connect_error);
   }
   else{
    if($conn->query($dquery))
    {
        echo "Record Deleted";
    }
    else
    {
        echo "Error".$conn->error;
    }
   }
 }
 include("displaydata.php");
?>