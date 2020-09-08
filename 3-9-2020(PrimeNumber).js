function prime()
{
 let num=prompt("Enter a number","0");
 num=parseInt(num);
 c=0;
 if(Number.isInteger(num))
 {
  for(i=2;i<=num/2;i++)
  {
   if(num%i==0)
   { 
     c=1;
     break;
   }
  }
  if(c==1)
  {
    alert("Input is a number and it is not prime");
  }
  else
  {
   alert("It is a prime number");
  }
 }
 else
 {
 alert("It is not a number");
 }
}

.html

<!DOCTYPE html>
<html>
<head>
<title>HTML</title>
</head>
<body>
<button onclick="prime()">Prime no</button>
<script src="primeno.js"></script>

</body>
</html>
