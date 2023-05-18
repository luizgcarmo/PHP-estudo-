<?php
use Source\MyClass;

require __DIR__ . '/tamplate.php';

/** 
 * [ constantes ] https://php.net/manual/pt_BR/language.constants
*/
fullStackPHPClassSession("constantes",__LINE__);

define("COURSE","PHP");     //tipo 1 runtime do app
const AUTHOR = "Luiz" ;     //tipo 2 compile time 

$formation = true;
if($formation){
    define("COURSE_TYPE","Formação");
}else{
    define("COURSE_TYPE","Curso");
}

echo "<p>COURSE_TYPE COURSE AUTHOR</p>";
echo "<p>{COURSE_TYPE} {COURSE} {AUTHOR}</p>";
echo "<p>",COURSE_TYPE ," ", COURSE ," ", AUTHOR."</p>";    // ou contatenar com { . }

class OnClass{
    const USER = "root";        //usar const em classes pq n da pra usar define
    const HOST = "localhost";

    public function getArgs(){
        
    }

}
echo "<p>" . OnClass::HOST . "</p>";
echo "<p>" . OnClass::USER . "</p>";

var_dump(get_defined_constants(true)["user"]);      // tirando o indice verá todas as Constantes do PHP

/**
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.predefined.php
 */
fullStackPHPClassSession("constantes mágicas",__LINE__);

var_dump([
    __LINE__,
    __FILE__,
    __DIR__
]);

function fullStackPHP(){
    return __FUNCTION__;
}

var_dump(fullStackPHP());

trait myTrait{
    public $traitName = __TRAIT__;
}

class FsPHP{
    use myTrait;
    public $className = __CLASS__;
}

var_dump(new FsPHP());

require __DIR__ . '/MyClass.php';

var_dump(new MyClass());
var_dump(MyClass::class);

