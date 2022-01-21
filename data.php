<?php
require_once('menu.php');

// 商品をクラスで作成：商品情報
$wagashi01 = new Menu('一花椿', 450, 'img/wagashi01.jpeg');
$wagashi02 = new Menu('白雪', 420, 'img/wagashi02.jpeg');
$wagashi03 = new Menu('雪の小草', 450, 'img/wagashi03.jpeg');
$wagashi04 = new Menu('霜紅梅', 450, 'img/wagashi04.jpeg');
$wagashi05 = new Menu('曙', 450, 'img/wagashi05.jpeg');
$wagashi06 = new Menu('品川餅', 450, 'img/wagashi06.jpeg');

// 商品を配列に格納
$menus = array($wagashi01, $wagashi02, $wagashi03, $wagashi04, $wagashi05, $wagashi06);

?>