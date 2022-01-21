<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="order-wrapper">
        <h2>ご注文内容</h2>

        <?php $totalPayment = 0 ?>

        <?php foreach ($menus as $menu): ?>
            <?php
                $orderCount = $_POST[$menu->getName()];
                $menu->setOrderCount($orderCount);
                $totalPayment += $menu->getTotalPrice();
            ?>
            <p class="order-amount">
                <?php echo $menu->getName() ?>
                ×
                <?php echo $orderCount ?>
                個
            </p>
            <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
        <?php endforeach ?>

        <!-- 合計金額の表示 -->
        <h3>合計金額：<?php echo $totalPayment ?>円</h3>
    </div>
</body>
</html>