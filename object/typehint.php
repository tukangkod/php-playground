<?php
// example for type hint for object
// only available on php 7.2
// failed on 7.1.16 and hhvm

class MyClass {
    public $var = '';
}

class FirstClass extend MyClass {
    public $var = 'My name is Fahmi';
}

class SecondClass extend MyClass {
    public $var = 'My name is Adam';
}

$firstChild = new FirstClass;
$secondChild = new SecondClass;

function test(object $arg) {
    return $arg->var;
}

echo test($firstChild);
echo "\n";
echo test($secondChild);
