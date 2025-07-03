<?php
// http://localhost/php01/index06.php にアクセス

// 繰り返し

// for 文
// for ($i = 初期値; $i <= 回数; 増減式) {処理}
for ($i = 0; $i < 4; $i++) {
    echo $i;
}

echo "<br />";

// Q.
for ($i = 1; $i < 5; $i++) {
    echo $i*2 . "<br />";
}


// while　文

// while (条件) {
    // 真の時に実行
    // 繰り返しの処理の中で変数の値を変化させる
// }

$i = 0;

while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

// Q.
$i = 0;

while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

// 出力値と繰り返し処理の順を入れ替えるとコーディングも変わる

// while ($count < 20) {
//     echo ($count +1) . '<br />';
//     $count += 1;
// }

// breakの使い方
$i = 0;
while ($i < 10) {
    if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
    }
    echo $i;
    $i++;
}

echo "<br />";

// continueの使い方
$i = 0;
while ($i < 10) {
    if ($i == 5) {
        $i++;
        continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
    }
    echo $i;
    $i++;
}

echo "<br />";

// Q.
$count = 0;
while ($count <=100) {
    if ($count == 20) {
        break;
    }
    if ($count % 3 === 0) {
        $count++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}


// do...while 文
// 繰り返し処理を行ってからその処理を評価する

// do…while文 :少なくとも1回は処理をする
// while文    :１度も処理をしない場合がある

// do{
//     // whileの条件式が真の時に実行
// }while (条件式);

$i = 0;
do {
    echo $i . '<br />';
    $i++;
} while ($i < 5);

// Q.
$num = 0;
do {
    echo 'num = ' . $num . '<br />';
    $num++;
} while ($num < 3);

// 応用問題
// Q.FizzBuzzゲーム
// 要件                 出力内容
// 3で割り切れる数        　Fizz
// 5で割り切れる数        　Buzz
// 3でも5でも割り切れる数	FizzBuzz
// それ以外の数         　　　数字

for ($gameNum = 1; $gameNum <= 50; $gameNum++){
    if ($gameNum % 15 == 0) {
        echo 'FizzBuzz' . '<br />';
    }else if ($gameNum % 3 == 0) {
        echo 'Fizz' . '<br />';
    }else if ($gameNum % 5 == 0) {
        echo 'Buzz' . '<br />';
    }else {
        echo $gameNum . '<br />';
    }
}

// Q.二重ループ
// 出力結果：
// ●●●●●
// ●●●●●
// ●●●●●
// ●●●●●
// ●●●●●
for ($i = 1 ; $i <= 5 ; $i++) {
    for ($dango = "●●●●●";;) {
        echo $dango . '<br />';
        break;
    }
}
// Answer...
// for ($i = 1; $i < 6; $i++) {
//     for ($j = 1; $j < 6; $j++) {
//         echo "●";
//     }
//     echo "<br />";
// }

