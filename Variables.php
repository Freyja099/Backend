<?php
// * Session 2 : Variables 

// * Variable is a reusable container that holds data, string, integer, float, boolean,...
// * to declare a variable we use $ and a unique variable name 
   
// * to display the content of a variable we use echo "{$var}";
    $name = "Aya";
    $online=true;
    $gpa = 3.5;
    $age = 12;
    $grade = 'A';
    $notOnline = false;

    echo " boolean : {$online} , float : {$gpa} , integer : {$age} , char = {$grade} , string : {$name} , boolean false : {$notOnline}";

    // * output : boolean : 1 , float : 3.5 , integer : 12 , char = A , string : Aya , boolean false :


    // ! PHP has a built-in exponent which is ** e.g: a**b => a to the power of b 
    // * Operator Precedence
    // * () =>  **  =>  * / %  =>  + - 
?>