<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function print_title(){
        function sum($left, $right){
            print($left+$right);
            print('<br>')
        }
        sum(2,4);

    }

    function print_discription(){
        scandir('./data');
        var_dump($list);
    
        $i = 0;
        while($i < 6){
            echo "<li>$list[$i]</li>\n";
            $i = $i +1;
        }
    }
    
    ?>

    <?php
    echo '1<br>';
    $i = 0;
    
    while($i < 3){
        
        echo '2<br>';
        $i = $i + 1;    
    }
    
    echo '3<br>';
    ?>


    //0717
    <h1>array<h1>
    <?php

    //배열을 표현하는 표현식
    $coworkers = array('egoing', 'leeczche', 'duru', 'taeho');
   
    echo $coworkers[1].'<br>';
    echo $coworkers[3].'<br>';

    var_dump(count($coworkers));
    array_push($coworkers, "gwangho", "gahyeon");
    var_dump($coworkers);

    ?>


    <?php

    //함수의 활용 정리정돈
    print_discription()
    
    while($i < count($list)){
        $list[$i] != '.'
        //echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        $i = $i +1;
    }

    
    ?>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    function basic(){
        print("Lorem ipsum dolor1")
        print("Lorem ipsum dolor2")
    }

    basic();

    <h2>parameter &amp; argument</h2>
   
    print_title();
    
    ?>

    // $list = scandir('./data');
    // echo "<li>list[0]<li>\n";
    // echo "<li>list[1]<li>\n";
    // echo "<li>list[2]<li>\n";
    // echo "<li>list[3]<li>\n";
    // echo "<li>list[4]<li>\n";
    // echo "<li>list[5]<li>\n";

    ?>
</body>
</html>