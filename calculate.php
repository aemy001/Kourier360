<?php

    if(isset($_POST['calculate']))
    {
        $weight = $_POST['weight'];
        $location = $_POST['location'];


        if($weight <= 10){
            echo "2000";
        }
        else{
            echo "3000";
        }
    }


?>