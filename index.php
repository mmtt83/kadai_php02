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
    <div class="container menu-wrapper">
        <h1>和菓子屋</h1>
        
        <!-- フォームここから -->
        <form action="confirm.php" method="post">
            <!-- 商品のオブジェクト -->
            <div class="menu-items">
                <!-- $menusの中身を全て表示 -->
                <?php foreach ($menus as $menu): ?>
                    <div class="menu-item">
                        <!-- 画像を取得 -->
                        <img src="<?php echo $menu->getImg() ?>" class="menu-itame-img">
                        <!-- タイトルを取得 -->
                        <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
                        <!-- 税込価格を取得 -->
                        <p class="price">
                            ¥
                            <?php echo $menu->getTaxIncludedPrice()?>
                            （税込）
                        </p>
                        <!-- 個数 -->
                        <input type="text" value="0" name="<?php echo $menu->getName() ?>">
                        <span>個</span>
                    </div>
                <?php endforeach ?>
                <!-- foreachここまで -->
            </div>
            <input type="submit" value="注文する">
        </form>
    </div>
</body>
</html>