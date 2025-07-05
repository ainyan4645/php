<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
print "私の名前は、" . $my_name;

echo '<br />';

$goods = htmlspecialchars($_POST['goods'], ENT_QUOTES);
print "ご希望の商品は、" . $goods;

echo '<br />';

$volume = htmlspecialchars($_POST['volume'], ENT_QUOTES);
print "注文数は、" . $volume;
