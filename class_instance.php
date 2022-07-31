//class를 사용할때 new를 사용하면 instance가 된다.

<?php
//class는 만드는 방법! 
//1. class 이름을 정의하고 중괄호를 사용하여 정의한다.
//2. ()와 new를 붙이면 그 class를 설계도로하는 인스턴스가 만들어지고
// 그인스턴스를 $file에 넣은것과 같다. 
//3. method를 만들때는 class안에 정의되어있는 함수를 사용하면되고,
// 호출할때는 $file과 화살표를 사용하면 가능하다 
class MyFileObject{
    function isFile(){
        //this를 안써주면 그냥 함수안에서의 변수라고만 정의가 된다. (바깥쪽으로 나갈수 없음)
        //$this-> 란 인스턴스에 주입한 파일이름을 여기에요 라고 표시해주는것
        //이 class를 통해서 instance화 한 그 instance 그 자체를 지정하자. 
        return is_file($this->filename);
    }
}
//구체적인 상품을 만드는것이 인스턴스 
$file = new MyFileObject();
$file->filename = 'data.txt';
//여기서 isFile()은 메소드
var_dump($file->isFile());
var_dump($file->filename);

$file2 = new MyFileObject();
$file2 ->filename = 'data2.txt';
var_dump($file2->isFile());
var_dump($file2->filename);

/*
MyFileObject : Class
$file, $file2 : instance
isFile : method, behavior(행위), function
$this->filename : Instance variable, Instance field, Instance property
                  Status
객체라는것은 서로 연관된 상태와 행위를 그룹핑해서 객체로 그룹핑한것이다. 
*/

//Constructor 생성자 (사전적의미: 무언가를 만드는 사람)
//class를 기반으로 instance를 만드는 역할을 하는것 
// 생성자를 통해 new를 붙이면 instance를 생성한다 



?> 