<?php

require 'template.php';

fullStackPHPClassName("Estrutura de Controle");

/**
 *  [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 *  [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 *  [ else ] https://php.net/manula/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else",__LINE__);

$test = true;

if($test){
    var_dump(true);
}else{
    var_dump(false);
}

$age = 32;

if($age < 20){
    var_dump("Bandas Coloridas");
}else if($age >20 && $age < 50){
    var_dump("Otimas Bandas");
}else{
    var_dump("Rock and Roll raiz");
}

$hour = 3;

if($hour>=5 && $hour < 23){
    if($hour< 7){
        var_dump("bob marley");
    }else{
        var_dump("After Bridge");
    }
}else{
    var_dump("ZZZZzzzzzZZZZZzzzz");
}

/**
 *  [ isset ] https://php.net/manual/pt_BR/function.isset.php
 *  [ empty ] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset , empty , !",__LINE__);

$rock = "";

if(!isset($rock)){
    var_dump("Rock and Roll");
}else{
    var_dump("die");
}

$rockAndRoll ="AC/DC";
if(!empty($rockAndRoll)){
    var_dump("Rock existe e toca {$rockAndRoll}");
}else{
    var_dump("nao existe ou nao está tocando");
}


/**
 *  [ switch ] https:secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch",__LINE__);
$payment = "canceled";
switch($payment){
    case 'billet_printed':
        var_dump("Boleto impresso");
        break;
    case 'canceled':
        var_dump("Pagamento cancelado");
        break;
    case 'past_due':
    case 'pending':
        var_dump("esperando pagamento");
        break;
    case 'approved':
        var_dump("aprovado");
    case 'completed':
        break;
    default:
        var_dump("erro no processo de pagamento");
        break;
};