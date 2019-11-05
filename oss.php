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

// $url = "https://api.github.com/orgs/docker";
// // cURLセッションを初期化
// $ch = curl_init();
// // オプションを設定
// curl_setopt($ch, CURLOPT_URL, $url); // 取得するURLを指定
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない
// // URLの情報を取得
// $response =  curl_exec($ch);
// // 取得結果を表示
// echo $response;
// $result = json_decode($response, true);
// // セッションを終了
// curl_close($conn);


// $token = '';
// $query = '';
// $options = [
//     'http' => [
//         'method' => 'POST',
//         'header' => [
//             'User-Agent: My User Agent',
//             'Authorization: bearer '.$token,
//             'Content-type: application/json; charset=UTF-8',
//         ],
//         'content' => json_encode(['query' => $query]),
//     ],
// ];
// $context = stream_context_create($options);
// $contents = file_get_contents('https://api.github.com/graphql', false, $context);
// var_dump(json_decode($contents));


ini_set('user_agent','UserAgent');
$json = file_get_contents('https://api.github.com/orgs/docker');
$arr = json_decode($json,true);
echo $arr["name"]

?>

    </p>

  </body>
</html>
