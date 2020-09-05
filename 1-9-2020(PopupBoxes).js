function showalert()
{
 window.alert("This is alert box");
}

let showalert1=()=>{                                   //Arrow function //Java lambda function
alert("This is alert box using arrow function");
}
function showa()
{
showalert();
}

function showconfirm()
{
  //let value=window.confirm("Do you want to display message?");
  
  let value=confirm("Do you want to display message?");
  if(value==true)
  {
    window.alert("Welcome to confirm box");
  }
  else
  {
    window.alert("You are not welcome to confirm box");
  }
}
function showprompt()
{
  let name=prompt("Enter your name","KIET");
  if(name!=null)
  {
   alert("Welcome"+name);
  }
  else
  {
   alert("We do not know your name");
   }
}


.html

<!DOCTYPE html>
<html>
<head>
<title>HTML</title>
</head>
<body>

<script src="popupboxes.js"></script>
<button onclick="showa()">Show Alert Box</button>
<button onclick="showalert()">Show Alert Box</button>
<button onclick="showconfirm()">Show Confirm Box</button>
<button onclick="showprompt()">Show Prompt Box</button>
</body>
</html>

