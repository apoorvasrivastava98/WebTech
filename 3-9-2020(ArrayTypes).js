let numbers=[12,35,67,89,45];
document.write("LITERAL ARRAY");
for(let i=0;i<numbers.length;i++)
{
    document.write("<br>"+numbers[i]);
}
let number1=new Array(11,12,13,14,15);
document.write("<br>CONDENSED ARRAY");
for(let i=0;i<number1.length;i++)
{
    document.write("<br>"+number1[i]);
}
let number2=[21,32,43,54,65];
document.write("<br>Array in NODE JS");
number2.forEach(function(value){
    document.write("<br>"+value);
});
//let number2=[21,32,43,54,65];
//document.write("<br>Array in NODE JS Displaying value with index");
//number2.forEach(function(value,index){
//    document.write("<br>"+index+"="+value);
//});
