<?php
echo '1) -------------------------------------------';
echo '<br>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus 
// (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

$name = 'Will';
$lastName= 'Smith';
$longest = (strlen($name) < strlen($lastName) ? $name : $lastName);
echo $longest;

echo '<br>';
echo '2) -------------------------------------------';
echo '<br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
// Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
echo strtoupper($name) . " " . strtolower($lastName);

echo '<br>';
echo '3) -------------------------------------------';
echo '<br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
// Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. 
// Jį atspausdinti.

$initials = substr($name, 0, 1) . substr($lastName, 0, 1);
echo $initials;

echo '<br>';
echo '4) -------------------------------------------';
echo '<br>';

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
// Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės 
// kintamųjų raidžių. Jį atspausdinti.

$last3letters = substr($name, -3) . substr($lastName, -3);
echo $last3letters;

echo '<br>';
echo '5) -------------------------------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) 
// pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$state = 'An American in Paris';
$state2 = str_replace(['a', 'A'], '*', $state);
echo $state2;

echo '<br>';
echo '6) -------------------------------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
// Rezultatą atspausdinti.


$count1 = substr_count($state, 'a', 0, strlen($state));
$count2 = substr_count($state, 'A', 0, strlen($state));
echo $count1 + $count2;

echo '<br>';
echo '7) -------------------------------------------';
echo '<br>';

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
// Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
$str = 'It\'s a Wonderful Life';
$newStr = str_ireplace(array('a','e','i','o','u'), '', $str);
echo $newStr;

echo '<br>';
echo '8) -------------------------------------------';
echo '<br>';

// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - 
// A New Hope'; Surasti ir atspausdinti epizodo numerį.

$stringas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - // A New Hope';
$int = (int) filter_var($stringas, FILTER_SANITIZE_NUMBER_INT);
echo $stringas;
echo '<br>';
echo $int;

echo '<br>';
echo '9) -------------------------------------------';
echo '<br>';

// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
// yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, 
// geriant sultis pas save kvartale”.
$string = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$string2 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';

$arr = explode(' ', $string);
$count = 0;
echo count($arr);
for($i=0; $i<count($arr); $i++) {
    if(strlen($arr[$i]) <= 5) {
        $count +=1;
    }
}
echo '<br>';
echo $count;

echo '<br>';
echo '10) -------------------------------------------';
echo '<br>';
// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$characters = 'abcdefghijklmnopqrstuvwxyz';
$charactersArr = str_split($characters);
$generatedString = '';

for($i=0; $i<3; $i++) {
    $generatedString .= $charactersArr[rand(0, 25)];
}
echo $generatedString;

echo '<br>';
echo '11) -------------------------------------------';
echo '<br>';

// Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
// o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. 
// (reikės masyvo)

$doubleString = $string2 . ' ' . $string;
$words = explode(' ', $doubleString);
$randomString = '';
// var_dump($words);
for($i = 0; $i < 10; $i++) {
    $randomString .= $words[rand(0, count($words)-1)] . ' ';
}
echo $randomString;



