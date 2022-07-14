<?php
echo "edit for git";
$git = "this is for git";

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>XAMPP</h1>
    
    <!-- phpの情報を開示 -->
    <!-- <?php phpinfo(); ?> -->

    <!-- マジック定数 -->
    <div>
        <ul>
            <li class="a">この桁<?= __LINE__ ?></li>
            <li class="a">ファイルパス<?= __FILE__ ?></li>
            <li class="a">ディレクトリパス<?= __DIR__ ?></li>
        </ul>
    </div>
</body>
</html>