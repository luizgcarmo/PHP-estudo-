<?php

require __DIR__ . '/tamplate.php';


/**
 *  [ functions ] https://php.net/manual/pt_BR/language.function.php
 */
fullStackPHPClassSession("Functions",__LINE__);

require __DIR__ . '/functions.php';

var_dump(functionName("Pearl Jam","Death","Ghost B.C."));

var_dump(optionArgs("EU"));
var_dump(optionArgs("EU","Quero um emprego"));

/**
 *  [ global access ] global $var
 */
fullStackPHPClassSession("global access",__LINE__);

$weight = 86;
$height = 1.80;

echo calcImc();

/**
 *  [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments",__LINE__);

$pay = payTotal(200);

echo $pay;
$pay = payTotal(300);

echo $pay;
/**
 *  [ dynamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dynamic arguments",__LINE__);

var_dump(myTeam("Luiz","Kalil","Victor"));
