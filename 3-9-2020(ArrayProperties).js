let number3=new Array(12,"23","kiet",67.89,89,45);
document.write("<br>Array can store different type of values");
for(let i=0;i<number3.length;i++)
{
    document.write("<br>"+number3[i]);
}
document.write("<br>Object and State in array");
let obj={name:"Anil",address:"kiet"};
document.write("<br>Name="+obj.name+" and address="+obj.address);
let obj1=new Object();
obj1.name="Raju";
obj1.address="KIET";
document.write("<br>Name="+obj1.name+" and address="+obj1.address);
