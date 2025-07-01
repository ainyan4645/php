<?php
// 上から順に実行され、一つの変数に一つの値しか入らない。
$item = "JavaScript";
// $item = "PHP";
echo $item;

// 定数
const FELANGUAGE = "Vue.js";
echo FELANGUAGE;

// 文字列(string)と整数(integer)
$str = 'こんにちは';
echo 20,$str;

// 連結演算子(.)
$name1 = "Sato" . "Taro";
$name2 =  "Tanaka";
$last_name = "Yamada";
$first_name = "Saburo";

echo $name1;
echo "<br />";
echo $name2 . "Jiro";
echo "<br />";
echo $last_name . $first_name;
// PHP では HTML のタグを挿入できる

// Q.
$name01 = "Tanaka";
$last_name01 = "Yamada";
$first_name01 = "Saburo";
echo "<br />";
echo $name01 . "Jiro";
echo "<br />";
echo $last_name01 . $first_name01;
