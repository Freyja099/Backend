<!-- * Session : Associative array -->

<?php
    // * Associative array = an array made of key => value pairs; each key has to be unique 
    // * $arrayName = array(key => value , key2 => value , key3 => value);

    $capitals = array(
        "USA" => "Washington D.C" ,
        "UK" => "London" , 
        "India" => "New Delhi" , 
        "China" => "Beijing" , 
        "Canada" => "Ottawa");

    // * To access to the value of an element we have to use the key instead of the index
    echo "{$capitals[China]} <br>";

    // * To display the array we use foreach loop but this time we have to add key => value that way 
    // * foreach($arrayName as $key => $value){...}

    foreach($capitals as $country => $capital)
    {
        echo "{$country} {$capital} <br>";
    }

    // * To change one of the values we have to access the array by its key 

    $capitals["USA"] = "New York";
    
    // * To add a new element 
    $capitals["Namibia"] = "Windhoek";

    // * To delete the last element of an array we use pop
    array_pop($capitals);

    // * To delete the first element of an array we use shift
    array_shift($capitals);

    // * To show only the keys there's a function called keys but this will return a new array we have to declare a new variable
    $keys = array_keys($capitals);
    foreach($keys as $key)
    {
        echo "{$key} <br>";
    }

    // * If we need the values only, there's a value function
    $values = array_values($capitals);
    foreach($values as $value)
    {
        echo "{$value} <br>";
    }

    // * We can flip the keys with the values, we have to create a new associative array in that case or reassign it
    $flipped_capitals = array_flip($capitals);
    foreach($flipped as $capital => $country)
    {
        echo "{$capital} {country} <br>";
    }

    // * To reverse the order we use reverse
    $reverse_capital = array_reverse($capitals);
?>