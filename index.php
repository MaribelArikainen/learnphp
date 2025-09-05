<?php

function sayHello(){
    var_dump('Hello');
}

sayHello();

function sayHelloToMe($name='Nameless'){
    var_dump("Hello $name!");
}

sayHelloToMe('Maribel');
sayHelloToMe('Olga');
sayHelloToMe();

function sayNameAndAge($name, $age) {
    var_dump("Your name is $name and yoy are $age years old!");
}

sayNameAndAge('Maribel', 19);
sayNameAndAge('Olga', 18);


function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}


recursion(0);