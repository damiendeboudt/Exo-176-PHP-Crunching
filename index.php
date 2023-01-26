<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

//nmbre de mot
echo count($dico);

echo "<br><br>";

//nmbre de mot à 15 caractères
$i = 0;
foreach ($dico as $value) {
    if (strlen(trim($value)) == 15) {
      $i++;
    }
}
echo $i;


echo "<br><br>";

//nmbre de mot avec lettre w
$i = 0;
foreach ($dico as $value) {
    if (strstr($value, "w")) {
        $i++;
    }
}
echo $i;

echo "<br><br>";
//nombre de mot avec "q" en dernier
$i = 0;
foreach ($dico as $value) {
    strrev($value);
    if (strstr($value, "q") === 0) {
        $i++;
    }
}
echo $i;

//JSON

echo "<br><br>";

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

echo 'Top 10 des films: <br><br>';

echo "1." . $top[0]["im:name"]["label"] . "<br>";
echo "2." . $top[1]["im:name"]["label"] . "<br>";
echo "3." . $top[2]["im:name"]["label"] . "<br>";
echo "4." . $top[3]["im:name"]["label"] . "<br>";
echo "5." . $top[4]["im:name"]["label"] . "<br>";
echo "6." . $top[5]["im:name"]["label"] . "<br>";
echo "7." . $top[6]["im:name"]["label"] . "<br>";
echo "8." . $top[7]["im:name"]["label"] . "<br>";
echo "9." . $top[8]["im:name"]["label"] . "<br>";
echo "10." . $top[9]["im:name"]["label"] . "<br>";



echo "<br><br>";

// test array_search
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('green', $array);
echo $key;



$key = array_search('Gravity', $top);

echo $key;