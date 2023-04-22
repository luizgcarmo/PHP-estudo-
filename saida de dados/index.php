<?php

 require 'fsphp.php';
 

/**
 * [ echo ] https://php.net/manula/ph_BR/function.echo.php
 */

 fullStackPHPClassSession("echo",__LINE__);

 echo "<p>echo : "," ","<span class='tag'>#BoraProgamar</span>","</p>";

 $hello = "Olá mundo!";
 $code = "<span class=tag>#BORAA!</span>";

 echo "<p>$hello</p>";
 echo "<p>{$code} programar</p>";
/**
 *  [ print ] https://php.net/manual/pt_BR/function.print.php
 */
 fullStackPHPClassSession("print",__LINE__);

 print $hello;
 print "<h3><span class=tag>{$code}</span></h3>";

 /**
  *  [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
  */
 fullStackPHPClassSession("print_r",__LINE__);  //só para listas 
$array = [
    "company"=>"trabalho:",
    "couser"=>"eu quero",
    "class"=>"um estagio :D"
];

print_r($array);

echo "<pre>",print_r($array,true),"</pre>";   // return | <pre> tag que ajuda a formatar como hash de codido



/**
 *  [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
 fullStackPHPClassSession("printf",__LINE__);

 $article ="<article><h1>%s<p>%s</p></h1></article>";
 $title = "{$hello} {$code}";
 $subtittle = "Why do we use it?
 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
  it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages 
  and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, 
  sometimes on purpose (injected humour and the like). 
 ";
 printf($article,$title,$subtittle);
 echo sprintf($article,$title,$subtittle);

 
 /**
  * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
  */
  fullStackPHPClassSession("vprintf",__LINE__);

  $company = "<article><h1>%s<p>Curso<b> %s</b>, aula <b>%s</b></p></h1></article>";

  vprintf($company,$array);

/**
 *  [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */

 fullStackPHPClassSession("var_dump",__LINE__);

 var_dump(
    $array,
    $hello,
    $company
);






 
 




