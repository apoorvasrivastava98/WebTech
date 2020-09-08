function sum(){
let num=prompt("Enter a number","0");

sum=0;
for(i=num;i>0;i=i/10){
r=i%10;
sum=sum+r;
}
alert("Sum of digits"+parseInt(sum));
}

.html

<!DOCTYPE html>
<html>
<head>
<title>HTML</title>
</head>
<body>
<button onclick="sum()">Sum of digits</button>
<script src="sum.js"></script>

</body>
</html>
