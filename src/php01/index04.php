<?php
// URL: http://localhost/php01/index04.php

// 演算子

// 算術演算子
$a = 15;
$b = 3;
$c = 10;

echo $a + $b;
echo "<br />";
echo $a - $b;
echo "<br />";
echo $a * $b;
echo "<br />";
echo $a / $b;
echo "<br />";
echo $a % $c;
echo "<br />";

// 代入演算子と複合演算子
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";

// $a %= $b   :$aに$bの値を剰余算して代入（$a = $a % $b）
// $a .= $b   :$aに$bの文字列を連結して代入（$a = $a.$bに等しい）


// 比較演算子
$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";

// $a == $b   :$aが$bに等しい時にTRUE
// $a === $b  :$aが$bに等しく同じ型である場合にTRUE
// $a != $b   :$aが$bに等しくない場合にTRUE
// $a <> $b   :$aが$bに等しくない場合にTRUE
// $a !== $b  :$aが$bと等しくないか、同じ型でない場合にTRUE
// $a >= $b   :$aが$bより多いか等しい時にTRUE


// 論理演算子
$a = 20;
$b = 5;

$ansewr1 = $a > 10;
$answer2 = $a < 30;

echo $ansewr1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $ansewr1 && $answer2;
echo "<br />";

// ! $a	      :$aがTRUEでない場合TRUE
// $a && $b   :$aおよび$bが共にTRUEの場合にTRUE
// $a || $b   :$aまたは$bのどちらかがTRUEの場合にTRUE
// $a and $b  :$aおよび$bが共にTRUEの場合にTRUE
// $a or $b   :$aまたは$bのどちらかがTRUEの場合にTRUE
// $a xor $b  :$aまたは$bのどちらかがTRUEでかつ両方ともTRUEでない場合にTRUE
// $a ?? $b   :$aがnullや未定義の場合、$bを返しそれ以外の場合は$aを返す


// 加算子と減算子
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;       // $aに1を加え、$aを返す
echo "<br />";
echo $b++;       // $aを返し、$aに1を加える
echo "<br />";
echo --$c;       // $aから1を引き、$aを返す
echo "<br />";
echo $d--;       // $aを返し、$aから1を引く
echo "<br />";

