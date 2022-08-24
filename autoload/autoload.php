// 같은 디렉토리에 있는 greeting.php에서 hi 클래스를 가져온다. 
//require_once 'greeting.php';

// 익명함수라고한다, 인자로 언젠가는 호출된다 해서 콜백함수라고한다.

spl_autoload_register(function ($path){
    $path = str_replace('\\', '/', $path);
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
});