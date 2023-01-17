<?php 

    /*//ternary operators

    $score = 50;

    $val = $score > 40 ? "high score" : "low score"; //ternary returns a value dont use echo inside of it

    echo $val;

    //superglobals

    echo $_SERVER["SERVER_NAME"]; //returns localhost*/

    // $_SESSION used to carry variables from page to page when redirecting

    if(isset($_POST["submit"])){

        session_start();

        $_SESSION["name"] = $_POST["name"];

        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>php tuts</title>
    </head>
    <body>
        <form action="sandbox.php" method="post">
            <input type="text" name="name">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>