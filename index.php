<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);"<br>";
echo $fruits[0]."<br><br>";

//Deuxieme ligne

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is ".$age["ben"]." years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=".$x.", Value=".$y;
}



//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");

sort($colors);
rsort($colors);

// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

sort($age);