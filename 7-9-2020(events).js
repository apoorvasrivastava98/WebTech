function checktext(obj)
{
 let data=obj.value;
 var checkname=/^[a-zA-Z ]+$/;
 if(checkname.test(data)===false)
 {
  alert("Please enter correct name");
  obj.value="";
  obj.setfocus=true;
 }
}
function checknumber(obj)
{
 let data=obj.value;
 data=parseInt(data);
 if(!Number.isInteger(data))
 {
  alert("Please enter correct age");
  obj.value="";
  obj.setfocus=true;
 }
}

.html

<!DOCTYPE html>
<html>
<head>
<title>HTML</title>
</head>
<body>
<form method="get" action="#" name="form1">
Name:<input type="text" onchange="checktext(this)" name="name"><br><br>
Age:<input type="text" onchange="checknumber(this)" name="age"><br><br>
<input type="submit" name="submit" value="Send data">
</form>
<script src="events.js"></script>

</body>
</html>
