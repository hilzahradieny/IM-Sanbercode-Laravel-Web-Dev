<?php
echo "<h2>Tugas Day 9 OOP PHP</h2>";

require_once("animal.php");
require_once("ape.php");
require_once("frog.php");


echo "<h3>Release 0</h3>"; 

$sheep = new parent_Animals("Shaun"); //using parent class "parent_Animals" without any addition child function
echo "Name : " . $sheep->name . "<br>"; 
echo "Legs : ". $sheep->legs . "<br>"; 
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; 
echo "<br>";


echo "<h3>Release 1</h3>";

$sungokong = new child_Ape("Kera Sakti");
echo "Name : " . $sungokong->name . "<br>"; 
echo "Legs : ". $sungokong->legs . "<br>"; 
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>"; 
echo "Yell : " .$sungokong->yell(). "<br>";  //add new function class child_Ape
echo "<br>";

$kodok = new child_Frog("Buduk");
echo "Name : " . $kodok->name . "<br>"; 
echo "Legs : ". $kodok->legs . "<br>"; 
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>"; 
echo "Jump : " .$kodok->jump(). "<br>";  //add new function class child_Frog
echo "<br>";

?>