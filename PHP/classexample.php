<! -- 26/10/2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Classes in php</title>
</head>
<body>
<?php
    class Student 
    {
        public $name="Suruchi";
        function displayName()
        {
            echo "<br>Your name =$this->name";
        }
    }
    $o1=new Student();
    $o1->displayName(); //Your name =Suruchi
    $o1->name="Harshika";
    $o1->displayName(); //Your name =Harshika
    $o2=new Student();
    $o2->displayName(); //Your name =Suruchi
    ?>
    </body>
    </html>