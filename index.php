<?php
    /*$name = "Lon";
    echo "<h1>$name Store</h1>";
    $age = 19;
    // this is a comment
    
    define("ADMIN","OUAIL"); //create a constant

    echo "admin is : ",ADMIN;
    echo "<br>";
    //Strings
    echo"<h1>STRINGS</h1>";
    $string1 = "my email is : ";
    $string2 = "not_wailmed@outlook.fr";

    echo $string1.$string2; // concatenate => dot
    echo "<br>";
    echo "Hey, my name is ".$name;
    echo "<br>";

    //diff between "" and ''

    echo "Hey my name is $name"; //works
    echo "<br>";
    echo 'Hey my name is $name'; //does not work
    echo "<br>";

    echo "length = ".strlen($name); //length
    echo "<br>";
    echo strtoupper($string1); //uppercase
    echo "<br>";
    echo strtolower("BLABLABLA"); //lowercase
    echo "<br>";
    echo str_replace('i','A',$string1); //replace every i with A in string1

    //Numbers

    echo"<h1>NUMBERS</h1>";

    // + , - , * , / ,** , ++ , --

    $num = 12.53;

    echo floor($num); //moves down
    echo ceil($num); //moves up

    //Arrays

    echo"<h1>ARRAYS</h1>";

    //indexed arrays value only, we access an element with the index

    echo"<h1>INDEXED ARRAYS</h1>";

    $peopleOne = ["shaun", "crystal", "ryu"]; //1st way of declaration
    $peopleTwo = array("ken","chun-li"); //2nd way of declaration

    echo count($peopleOne); //length
    echo "<br>";
    for($i = 0; $i < count($peopleOne); $i++) 
    {
        echo $peopleOne[$i]."|";
    }

    echo "<br>";

    $peopleOne[] = "ken"; //adds an element in the end

    print_r($peopleOne); //a way to print array in a dev way
    echo "<br>";

    array_push($peopleOne, "Ouail"); //adds an element in the end

    print_r($peopleOne);
    echo "<br>";

    $peopleThree = array_merge($peopleOne,$peopleTwo); //merges the two arrays into one

    print_r($peopleThree);

    $popped = array_pop($peopleOne); //pops the last element

    //associative arrays key + value , we access an element with the key

    echo"<h1>ASSOCIATIVE ARRAYS</h1>";

    $student = ["name" => "oauil", "age" => 19]; //u can also use array()

    echo $student["name"]; 
    echo "<br>";
    echo $student["age"];

    $student["city"] = "setif"; //adds an element of key city and value setif
    echo "<br>";
    echo $student["city"];
    echo "<br>";
    echo count($student);

    //all the functions works here also, merge count etc ...

    //multidimensional arrays , array in an array

    echo"<h1>MULTIDIMENSIONAL ARRAYS</h1>";

    $blogs = [
        ["title" => "bla","author" => "bla","number" => 1],
        ["title" => "blo","author" => "blo","number" => 2]
    ];

    echo $blogs[1]["author"];
    echo "<br>";

    $blogs[] = ["title" => "bli","author" => "bli","number" => 3];

    print_r($blogs);

    //LOOPS

    echo"<h1>LOOPS</h1>";

    for($i = 0 ; $i < 3 ; $i++) //u can use count() for arrays and stuff
    {
        echo "hello world";
        echo "<br>";
    }

    foreach($blogs as $blog)
    {
        echo $blog["title"] . "-" . $blog["author"];
        echo "<br>";
    }

    $i = 0;

    while($i < count($peopleOne))
    {
        echo $peopleOne[$i]."-";
        $i++;
    }*/

   /* $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    //BOOLEANS & COMPARISONS

    echo "<h1>BOOLEANS & COMPARISONS</h1>";

    echo true; // "1"
    echo false; // ""

    // < , <= , > , >= , == , != 

    //loose vs strict equal comparison

    echo 5 == '5'; //loose tests only value not type, returns true
    echo 5 === '5'; //strict tests both valy and type, returns false

    //CONDITIONAL STATEMENTS

    echo "<h1>CONDITIONAL STATEMENTS</h1>";

    foreach($products as $product)
    {
        if($product["price"] > 10 && $product["price"] < 40)
        {
            echo $product["name"];
            echo "<br>";
        }
    }

    //continue , break baynin

    //FUNCTIONS

    echo "<h1>FUNCTIONS</h1>";

    function sayHello($userName = "unknown")
    {
        echo "Hello, $userName";
    }

    sayHello();
    echo "<br>";
    sayHello("Lon");
    echo "<br>";

    function formatProduct($product)
    {
        return "{$product["name"]} costs {$product["price"]}$ to buy <br>"; //new way to echo
    }

    $formatted = formatProduct(["name" => "gold star", "price" => 20]);
    echo $formatted;

    //variable scope

    $uName = "mario";
    $uAge = 15;

    function saySomth(){
        global $uName;
        $name = "yoshi"; //changes the original name variable bcz of global keyword !
        $uAge = 14; // this uAge is different then uAge in global scope
        echo $uAge;
        echo "hello $uName"; //error, it looks only for local variables, must add global
    }

    saySomth();

    function blabla(&$uName){ //passing by reference
        echo $uName;
    }*/

   // include "ninjas.php"; //imports modules , if the file doesnt exist it shows an error then continues executing the rest of the code
   //require "ninjas.php"; //imports modules but if the file doesnt exist it shows an error and stops execution

    include "config/db_connect.php"; //for the connection to the DB

   //write query for all pizzas

   $sql = "SELECT title, ingredients, id FROM pizza ORDER BY created_at";

   //make query & get result

   $result = mysqli_query($conn,$sql); //here the result is not an array thats why we need to fetch it

   //fetch the resulting rows as an array

   $pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC); //returns it as an ASSOCIATIVE array

   //free memory

   mysqli_free_result($result);

   //close connection

   mysqli_close($conn);

   //printing result in html below

   // other stuff

   //explode(',',$pizzas[0]["ingredients"]); //goes through the array of ingredients in array 0 and whenever finds a << , >> puts the element bellow it in an array element


?>

<!DOCTYPE html>
<html>

    <?php include "templates/header.php"; ?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <img src="img/pizza.svg" alt="pizza" class="pizza">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza["title"])?></h6>
                            <ul>
                                <?php foreach(explode(",",$pizza["ingredients"]) as $ing){?>
                                    <li><?php echo htmlspecialchars($ing)?></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza["id"]?>" class="brand-text">more infos</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    <?php include "templates/footer.php"; ?>
        
</html>