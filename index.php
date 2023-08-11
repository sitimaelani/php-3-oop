<?php
    require_once "animal.php";
    require_once "frog.php";
    require_once "ape.php";

    $sheep = new Animal("shaun");

    echo "Name : " . $sheep->name ;// "shaun"
    echo "legs : " . $sheep->legs . "<br>"; // 4
    echo "cold blooded : " . $sheep->cold_blooded; // "no"
    echo "<br>";
    echo "<br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->name;
    echo "legs: " . $kodok->legs . "<br>";
    echo "cold blooded : " . $kodok->cold_blooded . "<br>";
    echo "Jump : "; 
    $kodok->jump();
    echo "<br>";
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo "Name : " . $sungokong->name;
    echo "legs: " . $sungokong->legs . "<br>";
    echo "cold blooded : " . $sungokong->cold_blooded . "<br>";
    echo "Yell : "; 
    $sungokong->yell() // "Auooo"


?>