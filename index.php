<?php

// 宿題


//演習1
$i = 100;
while ($i > 0) {
    echo $i .'<br>';
    $i--;
}

// for ($i = 100; $i >= 1; $i--) {
//     echo $i;
//     echo '<br>';
// }


//演習2
for ($i = 1; $i < 10; $i++) {
    echo $i * 3 .' ';
}
echo '<br>';


//演習3 FizzBuzz
for ($n = 1; $n <= 100; $n++) {
    if ($n % 15 == 0) {
        echo 'FizzBuzz ';
    } elseif ($n % 5 == 0) {
        echo 'Buzz ';
    } elseif ($n % 3 == 0) {
        echo 'Fizz ';
    } else {
        echo $n .' ';
    }
}
echo '<br>';



//演習4 1~100まで10単位で表示
for ($n = 1; $n <= 100; $n++) {
    if ($n % 10 == 0) {
        echo $n .'<br>';
    } else {
        echo $n .' ';
    }
}
echo '<br>';

// for ($i = 1; $i <= 100; $i++) {
//     echo $i.' ';
//     if ($i % 10 === 0) {
//         echo '<br>';
//     }
// }



//演習5 配列の要素カウント
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];

$n = 0;
for ($i = 0; $i < count($alpha); $i++) {
    if ($alpha[$i] == 'A') {
        $n++;
    }
}  
echo $n. '<br>';

// $i = 0;
// foreach ($alpha as $v) {
//     if ($v === 'A') {
//         $i++;
//     }
// }



//演習6 合格判定
$english = 70; //英語の点数
$math = 70; //数学の点数

if ($english >= 60 && $math >= 60 && $english+$math >= 140) {
    echo '合格！' . '<br>';
} else {
    echo '残念！' . '<br>';
}


//演習7 九九
for ($n = 1; $n <= 9; $n++) {
    for ($m = 1; $m <= 9; $m++) {
        if ($n * $m < 10) {
            echo ' ' . $n * $m . ' ';
        } else {
            echo $n * $m . ' ';
        }
    }
    echo '<br>';
}


//演習8 素数
for ($i = 2; $i <= 100; $i++) {
    $n = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0){
            $n++;
        }
    }
    if ($n == 2) {
        echo $i .' ';
    }
}
echo '<br>';

