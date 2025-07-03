<?php
// URL: http://localhost/php01/index08.php

// ＜配列と連想配列＞
// 変数は 1 つのデータしか入れられないが、
// 配列は、つながっている箱の数だけデータを入れることができる。
// 変数と同じく、配列名は$から始まる。

// array関数
$people = array('Taro', 'Jiro', 'Saburo');
var_dump($people);

// TIP：var_dumpとは
// 与えられた変数の値を詳細に出力する関数。
// 出力結果には、配列の要素数と各要素のデータ型、値、値の長さ（文字列の場合）が含まれる。
// プログラムのデバッグに役立つ。

echo "<br />";

// 配列の番号
// 配列要素は 0 から始まる番号が付けられる。
echo $people[0];

echo "<br />";

// 連想配列
// 添字(配列要素の別名？)に文字列を用いた配列のこと。
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);
var_dump($people);

echo "<br />";

// または、、
$people = [
    'person1' => 'taro',
    'person2' => 'jiro',
];

// 配列の値を取得するには、配列の変数にキーを［ ］（角括弧）で指定する。
echo $people['person1'];

echo '<br />';

// 多次元配列
// 配列の中に配列が入っている状態のこと。
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
    ];

// 多次元配列を出力するときも、同じように配列の変数にキーを［ ］（角括弧）で指定する。
echo $people[0]["last_name"];

echo '<br />';

// foreach 文
// for 文：繰り返す数をあらかじめ決めて処理する
// while 文：条件を指定し、その条件に合うあいだは処理する
// foreach 文：配列の要素の数だけ処理を繰り返す
$people = array('Taro', 'Jiro', 'Saburo');
foreach ($people as $person) {
    echo $person;
    echo '<br />';
}

// PHP で配列のループ処理の場合に添字を取得する方法
$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}

// Q.foreach文をつかって多次元配列の値をすべて出力してみましょう。
// 出力：
// Taro(25歳men)
// Jiro(20歳men)
// hanako(16歳women)

$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "women"]
];

foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")";
    echo '<br />';
}

// 配列は、正しく出力できていないとarrayと出力される。
