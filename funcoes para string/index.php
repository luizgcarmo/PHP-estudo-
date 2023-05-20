<?php

require __DIR__ . '/tamplate.php';

/**
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte",__LINE__);

$string = "eu quero um emprego Dáora";
var_dump([
    "string"=>$string,
    "strlen"=>strlen($string),
    "mbstrlen"=>mb_strlen($string),
    "substr"=>substr($string,"10"),
    "mb_substr"=>mb_substr($string,"10"),
    "strtoupper"=>strtoupper($string),
    "mb_strtoupper"=>mb_strtoupper($string)
]);

/**
 * [ conversao de caixa ] https:php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversao de caixa",__LINE__);

$mbstring = "Quero um estágio em PHP";

var_dump([
    "mb_strtoupper"=>mb_strtoupper($mbstring),
    "mb_strtolower"=>mb_strtolower($mbstring),
    "mb_convert_case UPPER"=>mb_convert_case($mbstring,MB_CASE_UPPER),
    "mb_convert_case LOWER"=>mb_convert_case($mbstring,MB_CASE_LOWER),
    "mb_convert_case TITLE"=>mb_convert_case($mbstring,MB_CASE_TITLE),
]);

/**
 * [ substituição ] multibyte e replace
 */
fullStackPHPClassSession("substituição",__LINE__);

$mbReplace = $mbstring;

var_dump([
    "mb_strlen"=>mb_strlen($mbReplace),
    "mb_strpos"=>mb_strpos($mbReplace," "),
    "mb_strrpos"=>mb_strrpos($mbReplace," "),
    "mb_substr"=>mb_substr($mbReplace,9),
    "mb_strstr"=>mb_strstr($mbReplace," ",true),
    "mb_strrchr"=>mb_strrchr($mbReplace, " ")
]);

$mbStrReplace = $string;

echo "<p>", $mbStrReplace ,"</p>";
echo "<p>", str_replace("emprego"," Salário ",$mbStrReplace),"</p>";
echo "<p>", str_replace(["emprego","Dáora"]," Salário ",$mbStrReplace),"</p>";
echo "<p>", str_replace(["emprego", "Dáora"],["Salário","Grande"],$mbStrReplace),"</p>";

$article = <<<ROCK
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
ROCK;
$articleData=[
    "event"=>"Rock in Rio",
    "desc"=>$mbMyReplace ="Show do Gojira"
];
echo str_replace(array_keys($articleData),array_values($articleData),$article);

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string",__LINE__);

$endPoint ="name=Luiz&email=eu@gmail.com";
mb_parse_str($endPoint,$parseEndPoint);

var_dump([
    $endPoint,
    $parseEndPoint,
    (object)$parseEndPoint
]);