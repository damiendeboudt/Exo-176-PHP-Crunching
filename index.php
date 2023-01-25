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

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films