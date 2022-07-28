<?php
    var_dump(is_file('data.txt'));
    var_dump(is_dir('data.txt'));
    var_dump(file_get_contents('data.txt'));
    file_put_contents('data.txt', rand(1, 100));
?>
<h1>Object</h1>
<?php
    //standard PHP Library
    // new 선언후에 함수를 호출하면 객체가 된다.  (new를 선언안해주면 객체가 안된다)
    // method랑 함수는 같은말입니다.
    $file = new SplFileObject('data.txt');
    var_dump($file->is_file());
    var_dump($file->isDir());
    //fread는 data.txt내용을 일게된다. 
    var_dump($file->fread($file->getSize()));
    $file->fwrite(rand(1,100));

    $file2 = new SplFileObject('data2.txt');
    var_dump($file2->is_file());
    var_dump($file2->isDir());
    //fread는 data.txt내용을 일게된다. 
    var_dump($file2->fread($file2->getSize()));
    $file2->fwrite(rand(1,100));
 
    // SplFileObject : Class 
    // class는 설계도라고 생각하면 편하다! 
    
    //설계도를 통해 만들어진 제품이라고 생각하면 편하다! 
    //class 앞에 new를 주고 실행시키면 
    
    // $file, $file2 : Instance
    // isFile, isDir, fread : method(function)
    // data.txt, data2.txt : state (상태라고 말한다)
    
?>