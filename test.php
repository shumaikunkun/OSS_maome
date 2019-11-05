<?php
//ローカルで実行する際は
//php -S 127.0.0.1:8080 test.php
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ビルトインウェブサーバーのテスト</title>
  </head>
  <body>

    <h1>いま何時？</h1>
    <p>いまは
    <?php
      date_default_timezone_set('Asia/Tokyo');
      echo date("Y 年 m 月 d 日 H 時 i 分 s 秒");
    ?>
    です。
    </p>

  </body>
</html>
