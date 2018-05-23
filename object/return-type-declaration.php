<?php
// return type declaration
// return "Hello World" only on php > 7.2

class MyClass {
    public $var = 'Hello World';
}

$myclass = new MyClass;

function test(MyClass $arg) : object {
    return $arg;
}

echo test($myclass)->var;

