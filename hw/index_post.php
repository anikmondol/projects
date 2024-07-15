<?php

session_start();



if(isset($_POST["submit"])){
    $year = $_POST["year"];

    
    if ($year) {
        if (strlen($year) === 4) {
            if (is_numeric($year)) {
                if ($year % 4 === 0 && ($year % 400 === 0 || $year % 100 != 0)) {
                    $_SESSION["sucess"] = "This year is leap year";
                    header("location: index.php");

                } else {
                    $_SESSION["sucess"] = "This year is not leap year";
                    header("location: index.php");

                }
                
            } else {
                $_SESSION["error"] = "This field can't be accept string";
                header("location: index.php");
            }
            
        } else {
            $_SESSION["error"] = "invalid number / yaer";
            header("location: index.php");
        }
        
    } else {
        $_SESSION["error"] = "This field can't be null or required";
        header("location: index.php");
    }
    
    




   
    

}


?>