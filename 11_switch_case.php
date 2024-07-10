<?php


$mark = 'adasf';

switch (true) {
    case ($mark >= 80 && $mark <= 100):
        echo "A+";
        break;

    case ($mark >= 70 && $mark <= 79.9):
        echo "A";
        break; 
        
        
    case ($mark >= 60 && $mark <= 69.9):
        echo "A-";
        break;         
    

    case ($mark >= 50 && $mark <= 59.9):
        echo "B";
        break;   
        
        
    case ($mark >= 40 && $mark <= 49.9):
            echo "C";
            break;   
            
            
    case ($mark >= 0 && $mark <= 29.9):
            echo "D";
            break;  

    case ($mark < 0 ):
        echo "you are got positiv mark";
        break;                 

    default:
        echo "F";
        break;
}




?>