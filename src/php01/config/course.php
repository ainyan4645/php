<?php
// $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";

// htmlspecialchars:
// フォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数

// GET で送信する場合、送信データは URL のファイル名の後ろに付加される。

// POSTとGETの使い分け
// POST：
// ・サーバーに情報を投稿する
// ・配列などの長いデータを送信する
// ・ファイルのアップロードを行う
// GET：
// ・サーバーから情報を取り出す
