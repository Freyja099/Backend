<!-- * Session : Array -->

<?php
// * array = "variable" which can hold more than one value at a time

// * we declare an array this way $var = array();

    $foods = array("pizza" , "orange" , "salad" , "coconut");

// * To display each element of array we use foreach loop that way : foreach (arrayName as iteratorName){ echo $iterator; }
    foreach ($foods as $food)
    {
        echo $food . "<br>";
    }

// * To add a new element to the array we use : array_push($arrayName , "the new element") we can add more than one element just add comma and continue the list 

array_push($foods , 4);


// ! Array in php can restore different type of variables

// * To delete the last element of the array we use pop
array_pop($foods);

// * To delete the first element of the array and shift all the elements over by one we use shift
array_shift($foods);

// * To reverse an array we use reverse but we have to make it equal to a new array or reassign it to the same array, it won't work if we put it directly like push or pop

$reversed_foods = array_reverse($foods);
$foods = array_reverse($foods);

// * To get the current number of elements within an array we use count function that way : echo count($arrayName);
echo count($foods);
?>