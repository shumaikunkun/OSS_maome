<?php
//ローカルで実行する際は
//php -S 127.0.0.1:8080 oss.php
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>OSSまとめ</title>
  </head>
  <body>

    <h1>OSSまとめ</h1>
    <p>

    <?php  ?>

    <?php
    $url="https://api.github.com/users/shumaikunkun/repos?per_page=100&page=1";
    $json = file_get_contents($url);
    $arr = json_decode($json);

    echo $json;
    ?>

    </p>

  </body>
</html>
