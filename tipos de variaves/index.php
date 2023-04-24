<?php

require 'fsphp.php';

/**
 * [ tipos de dados ] https://php.net/manual/pt_BR/language.types.php
 * [ variáves ] https://php.net/manual/pt_BR/language.variables.php
 */
 fullStackPHPClassSession("variáveis",__LINE__);
    $userFirstName = "Eu quero";
    $userLastName = "um estagio!!";
    $userAge = 27;

    echo "<span class=tag>{$userFirstName} {$userLastName}</span>";
    
  // variavel variavel
  $need = "aprendendo";
  $$need = "PHP para trabalhar";

  echo "<h2><span class=tag>{$need} {$aprendendo}</span></h2>";

  // referenciando variaveis

  $calcA = 10;
  $calcB = 20;
  $calcB = &$calcA;
  $calcB = 20;
  var_dump([
    "a" => $calcA,
    "b" => $calcB
  ]);
//************************************************************* */
/**
 * [ tipo boleano ] true | false (sempre em minuscula)
 */
 fullStackPHPClassSession("tipo boleano",__LINE__);

 $true = true;
 $false = false;

 var_dump($true,$false);


 $bestAge = ($userAge>50);
 var_dump($bestAge);

 $a=0;
 $b=0.0;
 $c="";
 $d=[];
 $e=null;

 var_dump($a,$b,$c,$d,$e);

 if($a||$b||$c||$d||$e){
    var_dump(true);
 }else{
    var_dump(false);
 }

 /**
  * [ tipo callback ] call | closure
  */
  fullStackPHPClassSession("tipo callback",__LINE__);

  $code ="<article><h1>Call User Function</h1></article>";
  $codeClear = call_user_func("strip_tags",$code);

  var_dump($code,$codeClear);

  $codeMore = function($code){
    var_dump($code);
  };
  $codeMore("Bora programar!!");

  /**
   * [ outros tipos ] string | array | objeto | numérico | null
   */
  fullStackPHPClassSession("outros tipos",__LINE__);

  $string = "ola";
  $array = [$string];
  $object = new stdClass();
  $object ->hello = $string;

  $null = null;
  $int = 123;
  $float = 1.23;

  var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
  ]);
