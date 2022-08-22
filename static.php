<?php
class Person{
    //Static은 정적 
    private static $count = 0;
    //각각의 인스턴스 부문은 이러한 
    // private dynamic $name; 이라고 봐도 무방함 
    // 아래 일을 진행시키면 name은 4개가 되는거지만
    // static을 사용하면 정적으로 되기때문에 하나가 반복해서 count++ 되기때문에
    // 1 2 3 4 로 표시할수있는것
    private $name;
    function __construct($name){
        // 인스턴스 경우에는 ->
        $this->name = $name;
        // class 의 경우에는 :: 를사용한다!!!                                         
        self::$count = self::$count + 1;
    }


    function enter(){
        echo "<h1>Enter".$this->name."".self::$count."th</h1>";
    }

    //static이 붙었기때문에 class 속성이다.
    static function getCount(){
        return self::$count;
    }
}

$p1 = new Person('egoing');
$p1 -> enter();
$p2 = new Person('leezche');
$p2 -> enter();
$p3 = new Person('duru');
$p3 -> enter();
$p4 = new Person('taiho');
$p4 -> enter();
echo Person::getCount();

?>