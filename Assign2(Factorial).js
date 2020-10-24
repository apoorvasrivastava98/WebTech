function fact()
{
let number = parseInt(prompt('Enter a positive integer: '));
if (number < 0) {
    document.write('Error! Factorial for negative number does not exist.');
}
else if (number === 0) {
    document.write("The factorial of" +number+" is 1.");
}
else {
    let fact = 1;
    for (i = 1; i <= number; i++) {
        fact *= i;
    }
    document.write("The factorial of "+number+" is "+fact);
}
}

.html
<!DOCTYPE html>
<html>
<head>
<title>HTML</title>
</head>
<body>
<button onclick="fact()">Factorial of a no</button>
<script src="A2Q2(Factorial).js"></script>
</body>
</html>
