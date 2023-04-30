<?php 

require 'template.php';

/**
 *  [ arrays ] https://php.net/manual/pt_BR/language.type.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
$arrA = array(1,2,3); // simplifica a declaração de vetores

var_dump($arrA);

$arrayIndex = [
    "Brain",
    "Angus",
    "Malcon"
];
$arrayIndex[] = "Cliff";  // add novos elementos sem precisar reescrever o vetor
$arrayIndex[] = "Phil";

var_dump($arrayIndex);
/**
 *  [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array",__LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" =>"Angus",
    "base_guitar" => "Malcon",
    "bass_guitar" => "Cliff"
];

$arrayAssoc["drums"]="Phil";
$arrayAssoc["rock_band"]="AC/DC";

var_dump($arrayAssoc);

/**
 *  [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array",__LINE__);

$brian = ["Brian","Mic"];
$angus = ["Angus","instrument" =>"guitar"];
$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump([
    "brian" =>$brian,
    "angus" =>$angus
]);

/**
 *  [ array access ] foreach(array as item) || foreach(array as key=>value)
 */
fullStackPHPClassSession("array access",__LINE__);
$pearl =[
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
];

$acdc = [
    "band"=>"AC/DC",
    "vocal" => "Brian",
    "solo_guitar" =>"Angus",
    "base_guitar" => "Malcon",
    "bass_guitar" => "Cliff",
    "drums" => "Phill"
];

echo "<p>O Vocal da banda AC/DC é {$acdc["vocal"]}</p>";
echo "<p>O guitarrista da banda AC/DC é {$acdc["solo_guitar"]}</p>";

$rockBands =[
    "acdc" => $acdc,
    "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['vocal']}</p>";

foreach($acdc as $item){
    echo "<p>{$item}</p>";
}

foreach($pearl as $key=>$value){
    echo "<p>{$value} is a {$key}</p>";
}

foreach($rockBands as $rockBands){
    var_dump($rockBands);
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";

    vprintf($art,$rockBands);
}
