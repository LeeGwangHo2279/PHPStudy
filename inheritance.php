<?php
class Animal{
    function run(){
        print('running..<br>');
    }
    function breathe(){
        print('breathing...<br>');
    }
}
class Human extends Animal{
    function think(){
        print('thinking...<br>');
    }
    function talk(){
        print('talking...<br>');
    }
}

// 휴먼에 애니몰이 없어도 런과 브레스를 기동시킬수있따

$ani = new Animal();
$ani->run();
$ani->breathe();

$human = new Human();
$human -> run();
$human -> think();


?>