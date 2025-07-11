<?php
// URL: http://localhost/php01/index07.php

// ＜関数＞
// phpの関数の種類は２つ
// ・内部関数(ビルトイン関数)
// ・ユーザー定義関数

// 関数の定義
// ```
// // 基礎構文
// function 関数名(){
// 処理内容
// return 返り値
// }
// ```

// 例1：引数と戻り値あり
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);

echo '<br />';

// 例2：引数と戻り値なし
function outputHello()
{
    echo "Hello world";
}

outputHello(); // ①

echo '<br />';

// 例3：引数と戻り値あり
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;

echo '<br />';

// Q.結果が 5 になる関数を定義する
function sumNum($num1, $num2)
{
    $sumValue = $num1 + $num2;
    return $sumValue;
}

$total = sumNum(2, 3);
echo $total;

echo '<br />';

// Q.引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。
function result($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo "合計点は" . $total . "なので合格です";
    }else {
        echo "合計点は" . $total . "なので不合格です";
    }
}

echo result(80, 56, 63);

echo '<br />';

// Q.三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。
function triangle($base, $height)
{
    $exam = ($base * $height) /2;
    echo "三角形の面積は" . $exam . "m2です。";
}
function square($base, $height)
{
    $exam = $base * $height;
    echo "四角形の面積は" . $exam . "m2です。";
}
function trapezoid($upper, $base, $height)
{
    $exam = ($upper + $base) * $height /2;
    return "台形の面積は" . $exam . "m2です。";
}

echo triangle(15, 2) . "\n";
echo square(15, 2) . "\n";
echo trapezoid(10 ,15, 2) . "\n";

// Tips：
// echoではなくreturnでも可
// return $base *$height;

// "\n"　：半角スペース