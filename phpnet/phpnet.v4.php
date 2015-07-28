<?php
interface a
{
    const b = 'Interface constant';
}

// Prints: Interface constant
echo a::b . PHP_EOL;

// This will however not work because it's not allowed to
// override constants.
class b implements a
{
    const bx = 'Class constant';
    function show() {
      print_r($this->getConstants());
    }
    static function getConstants() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}

$test = new b;
$test->show();

?>
