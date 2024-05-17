<?php 

//Variables

$name = 'Christian Eliseo Isip';
$age = 21;
$address = 'ADD Street, Sampaloc, Apalit, Pampanga.';
$hobbies = 'watching, singing, listening to music';
$pet_peeve = 'Indirect Hinting Habit/ Passive-Aggressive Insinuation';

echo $name . "<br>";
echo $age . "<br>";
echo $address . "<br>";
echo $hobbies . "<br>";
echo $pet_peeve . "<br>";

//Single-line comment

// $hobbies = ['watching', 'singing', 'listening to music'];
// $pet_peeve = 'Indirect Hinting Habit/ Passive-Aggressive Insinuation';

//Constants

define('NAME','Christian Eliseo Isip');
define('AGE', 21);
define('ADDRESS','ADD Street, Sampaloc, Apalit, Pampanga.');
define('HOBBIES', 'watching, singing, listening to music' );
define('PET_PEEVE','Indirect Hinting Habit/ Passive-Aggressive Insinuation');

echo NAME . "<br>";
echo AGE . "<br>";
echo ADDRESS . "<br>";
echo HOBBIES . "<br>";
echo PET_PEEVE . "<br>";

//var_dump

var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);

//Multi-line comment

/* Indirect Hinting Habit: 
Instead of directly saying what they mean, what they want to do, or what they want to happen, they resort to passive-aggressive insinuations.
This habit frustrates me because it would've been a lot easier to fix the issue if they had stated the problem clearly and directly. */

?>