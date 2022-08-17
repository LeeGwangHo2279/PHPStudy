<?php
$file = new SplFileObject('data.txt');
var_dump($file->fread($file->getSize()));
// 커서를 이미 마지막쪽으로 옮겼기 때문에 0을 가지고옴 
// 해결하기 위해서는  rewind를 사용
$file->rewind();
var_dump($file->fread($file->getSize()));
class MyFileObject extends SplFileObject{
    //아무런 내용이 없어도 위에 클래스를 언제든지 사용할수있따.
    function getContents(){
        //fread는 fread(파일위치, 불러올 크기) : 서버에 저장된 파일을 선택한 후 정한 크기만큼
        //읽어오기 위해서는 Fread()함수를 사용한다. 
        $content = $this->fread($this->getSize());
        $this -> rewind();
        return $content;
    }
}

$file = new MyFileObject('data.txt');
// var_dump($file->fread($file->getSize()));
// $file->rewind();
// var_dump($file->fread($file->getSize()));

 var_dump($file->getContents());
 var_dump($file->getContents());


?>