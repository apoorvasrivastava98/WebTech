function prime()
{
 for(num=1;num<=100;num++)
{
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
  
  if(c!=1)
  {
document.write("  "+num);
  }
 }
 else
 {
 alert("It is not a number");
 }
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
<script src="A2Q3(PrimeNos).js"></script>
</body>
</html>
