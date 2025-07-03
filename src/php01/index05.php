<?php
// URL: http://localhost/php01/index05.php

// 条件分岐

// if 文
$a = 5;
if($a === 5){
    echo "\$aは5です";
    echo "<br />";
    echo '$aは5です';
}

// シングルクォーテーション '...' の中では、変数展開はされないため、\を使わなくても$aがそのまま表示される。

echo "<br />";

$a = 7;
if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}

echo "<br />";

$a = 7;
if ($a === 5) {
    echo "\$aは5です";
}elseif ($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}

echo "<br />";


// switch 文
$people = "Saburo";

switch($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
        echo "誰でもありません";
        break;
}

echo "<br />";


// 三項演算子
$a = 7;

$result1 = ($a > 5) ? "TRUE" : "FALSE";
echo $result1;

