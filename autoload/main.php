<?php
// 같은 디렉토리에 있는 greeting.php에서 hi 클래스를 가져온다. 
//require_once 'greeting.php';

// 
function autoloader($path){
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
}
spl_autoload_register('autoloader');

// require_once를 직접해도 무관! 
new Hi();
new Bye();

?>