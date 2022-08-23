<?php
class Hi{
    function __construct(){
        echo 'hi';
    }
}
//이렇게만해도 생성자 안에 Hi가 있기때문에 Class Hi가 호출된다. 
// Class가 같은 파일내에서 있을땐 이런식으로 호출 된다.
new Hi();

?>