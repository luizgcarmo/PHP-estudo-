<?php

require 'tamplate.php';

/**
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once",__LINE__);

// include "file.php";
// echo "<p>Continue</p>"
//include "header.php";
include __DIR__ . "/header.php";



$profile = new StdClass();

$profile->name = "Luiz";
$profile->company = "UTFPR";
$profile->email = "eu@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

$profile = new StdClass();

$profile->name = "Kaliu";
$profile->company = "UTFPR";
$profile->email = "mama@gmail.com";

include_once __DIR__ . "/profile.php";
// sómente uma vez

/**
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */

 fullStackPHPClassSession("require , require_once",__LINE__);

 // require "file.php";
 // echo "<p>Continue</p>"

 require __DIR__ . "/config.php";

 //echo COURSE;
 echo "<h1>". COURSE . "</h1>";
 require_once __DIR__ . "/config.php";