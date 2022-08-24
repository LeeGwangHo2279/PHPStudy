<?php
// 그다음의 네임스페이스가 나오기전까지 전부다 en안에 존재한다 
namespace greeting\en;
class Hi{
    function __construct(){
        echo 'hi';
    }
}
//이렇게만해도 생성자 안에 Hi가 있기때문에 Class Hi가 호출된다. 
// Class가 같은 파일내에서 있을땐 이런식으로 호출 된다.
new Hi();

//네임스페이스는 자바의 패키지를 생각하면 편하다!
namespace greeting\ko;
class Hi{
    function __construct(){
        echo '안녕';
    }
}

//namespace를 변수로 만들어서 지정하거나 직접 사용이 가능하다. 
// use \greeting\en\Hi as HiEn;
// use \greeting\ko\Hi as Hiko;
// new HiEn();
// new Hiko();

// new \greeting\en\Hi();
// new \greeting\ko\Hi();


?>