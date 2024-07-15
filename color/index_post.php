<?php

session_start();


if (isset($_POST["submit"])) {
    $vale = $_POST["value"];

    if (is_string($vale)) {

        if ($vale) {
            switch ($vale) {
                case 'red':
                    $_SESSION["red"] = "This color is red";
                    header("location: index.php");
                    break;
    
                case 'green':
                    $_SESSION["green"] = "This color is green";
                    header("location: index.php");
                    break;
    
                case 'blue':
                    $_SESSION["blue"] = "This color is blue";
                    header("location: index.php");
                    break;
                case 'yellow':
                    $_SESSION["yellow"] = "This color is yellow";
                    header("location: index.php");
                    break;
    
                case 'orange':
                    $_SESSION["orange"] = "This color is orange";
                    header("location: index.php");
                    break;
    
                case 'brown':
                    $_SESSION["brown"] = "This color is brown";
                    header("location: index.php");
                    break;
    
                case (is_numeric($vale)):
                    $_SESSION["error"] = "I have can't accept number";
                    header("location: index.php");
                    break;
    
                default:
                    $_SESSION["black"] = "sorry i am not found";
                    header("location: index.php");
                    break;
            }
        } else {
            $_SESSION["error-1"] = "give me valid color";
                    header("location: index.php");
        }
        

        
    }
}
