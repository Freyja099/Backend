<?php

// * Session 3 : GET and POST

// * $_GET and $_POST = are special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form> : <form action = "some_file.php" method = "get">

// * $_GET = Data is appended to the URL 
// *         Not Secure
// *         char limit
// *         Bookmark is possible w/ values
// *         GET requests can be cached
// *         Better for a search page


// * $_POST = Data is packaged inside the bocy of the http request 
// *          More Secure
// *          No data limit 
// *          Cannot bookmark
// *          GET requests are not cached
// *          Better for submitting credentials


// * Get is technically an array 

// ! when working with Get any data sent to a php form is appended to the URL 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Session 3 : GET and POST</title>
    </head>

    <body>
        <form action="GET_POST.php" method="get">
            <label> Username </label>
            <br>
            <input type="text" name="username">
            <br>

            <label> Password </label>
            <br>
            <input type="password" name="password">
            <br>

            <input type="submit" value="Log in">
        </form>
    </body>
</html>

<?php
    echo $_GET["username"] . "<br>";
    echo $_GET["password"];

    // * To break the two lines there's two ways 
    // * 1st one add  . " <br> " before the semi-colone
    // * the second one is to put the Get[ ..] inside {} and "" like this 
    echo "{$_GET["username"]} <br>";
?>