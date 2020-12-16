<! -- 27/10/2020 -->
<?php
    class AC
    {
        public $model="V01";
        public $name="Voltas";
        public $date="27/10/2010";
        function displayACInfo()
        {
            echo "<br>Name=$this->name"; //Name=Voltas         
            echo "<br>Model=$this->model"; //Model=V02
            echo "<br>Date of purchase=$this->date"; //Date of purchase=27/10/2010
            echo "<br>";
        }
    }
    $ac1=new AC();
    $ac1->model="V02";
    $ac1->displayACInfo();
    class SmartAC extends AC
    {
        public $wifi="yes";
        public $cloud_storage="yes";
        public $music="no";
        function displaySmartACInfo()
        {
            echo "<br>Name=$this->name"; //Name=LG
            echo "<br>Model=$this->model"; //Model=V03
            echo "<br>Date of purchase=$this->date"; //Date of purchase=27/10/2010
            echo "<br>Wifi=$this->wifi"; //Wifi=yes
            echo "<br>Cloud Storage=$this->cloud_storage"; //Cloud Storage=yes
            echo "<br>Music=$this->music"; //Music=no
            echo "<br>";
        }
    }
    $ac1=new SmartAC();
    $ac1->model="V03";
    $ac1->name="LG";
    $ac1->displaySmartACInfo();
?>