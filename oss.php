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

    <?php  ?>

<?php
ini_set('user_agent','UserAgent');
$json = file_get_contents('https://api.github.com/orgs/github');
$arr = json_decode($json,true);
$member_json = file_get_contents(str_replace("{/member}","",$arr["public_members_url"]));
$member_arr = json_decode($member_json,true);
?>

<img src=<?php echo $arr["avatar_url"]."&s=100" ?> />
<p><?php echo $arr["name"] ?></p>
<p><?php echo $arr["location"] ?></p>
<p><?php echo $arr["html_url"] ?></p>
<p><?php echo $arr["blog"] ?></p>
<p><?php echo count($member_arr) ?></p>
<p><?php echo $arr["public_repos"] ?></p>
<p><?php echo explode("-",$arr["created_at"])[0] ?>年</p>



  </body>
</html>
