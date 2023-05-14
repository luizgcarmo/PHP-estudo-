<?php

    require 'tamplate.php';

/**
 *  [ closures ] https://php.net/manula/pt_BR/functions.anonymous.php
 */

 fullStackPHPClassSession("closures",__LINE__);

 $myAge = function($year){
    $age = date("Y") - $year;
    return "<p>Voce tem {$age} anos </p>";
 };

 echo $myAge(1995);

 $priceBrl = function($price){
    return number_format($price,2,",",".");

 };

 echo "<h2>Preço  R$ {$priceBrl(3600)}</h2>";

 $myCart = [];
 $myCart["totalPrice"] = 0;
 
 // " & " referencia a variavel
 $cardAdd = function($item,$qtd,$price)use(&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];

 };
 $cardAdd("HTML5",1,497);
 $cardAdd("CSS3",4,300);
 var_dump($myCart,$cardAdd);


 /**
 *  [ generators ] https://php.net/manula/pt_BR/languages.generators.overview.php
 */ 
 fullStackPHPClassSession("generators",__LINE__);

 $iterator = 40;

 function showDates($days){
    $saveDate = [];
    for($day=1;$day<$days;$day++){
        $saveDate[] = date("d/m/Y",strtotime("+{$day}days"));
    }
    return $saveDate;
 }

 echo "<div style='text-align: center'>";
 foreach(showDates($iterator) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
 }
 echo "</div>" . PHP_EOL . PHP_EOL; // [ . PHP_EOL] pula linha

 // generator

 function generationDate($days){
    for($day=1;$day < $days;$day++){
        yield date("d/m/Y",strtotime("+{$day}days")); // ja gera o resultado
    }
 }

 echo "<div style='text-align: center'>";
 foreach(generationDate($iterator) as $date){
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
 }
 echo "</div>";