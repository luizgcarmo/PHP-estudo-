<?php

require __DIR__ . '/tamplate.php';

/**
* [ criação ] https://php.net/manual/pt_BR/ref.array.php
*/
fullStackPHPClassSession("manipulação",__LINE__);
$index = [
    "AC/DC",
    "Death",
    "Gojira"
];
$assoc = [
    "band_1"=>"KORN",
    "band_2"=>"Be'lakor",
    "band_3"=>"Five Finger Death Punch"
];

array_unshift($index,"Slayer");     // adiciona no começo do array 
$assoc = ["band_4"=>"Cannibal Corpse"] + $assoc;

array_push($index,"Ghost B.C.");    // adiciona no final

$assoc = $assoc + ["banda_6"=>""];

array_shift($index);                // retira do começo
array_shift($assoc);

array_pop($assoc);                  // retira do final

array_unshift($index,"");
$index = array_filter($index);      // retira indices em branco
$assoc = array_filter($assoc);


var_dump(
    $index,
    $assoc
);


/**
* [ ordenação ] reverse | assort | ksort | sort
*/
fullStackPHPClassSession("ordenação",__LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
krsort($index);

sort($index);
rsort($index);

var_dump($index,$assoc);

/**
* [ verificação ] keys | values | in | explode
*/
fullStackPHPClassSession("verificação",__LINE__);

var_dump([
    array_keys($assoc),
    array_values($assoc)
]);

if(in_array("AC/DC",$index)){
    echo "<p>Classic Rock</p>";
}

$arrToString = implode(", ",$assoc);

echo "<p>Eu gosto de {$arrToString} ...</p>";

var_dump(explode(", ",$arrToString));


/**
* [ exemplo pratico ] um tamplate view | implode
*/
fullStackPHPClassSession("exemplo pratico",__LINE__);

$profile = [
    "name" => "Luiz",
    "company" => "UTFPR",
    "mail" => "eu@email.com"
];
$tamplate = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto{{mail}}" title="enviar email para {{name}}">{{mail}}</a></p>
    </article>

TPL;

echo $tamplate;

echo str_replace(
    array_keys($profile),
    array_values($profile),
    $tamplate
);

$replaces = "{{".implode("}}&{{",array_keys($profile)). "}}";

echo $replaces;

//var_dump(explode("&",$replaces));

echo str_replace(
    explode("&",$replaces),
    array_values($profile),
    $tamplate
);