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
?>