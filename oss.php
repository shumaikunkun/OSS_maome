<?php
//ローカルで実行
//php -S 127.0.0.1:8080
//http://localhost:8080/oss.php
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>OSSまとめ</title>
  <link rel="stylesheet" href="style.php">
</head>
<body>

  <h1>OSSまとめ</h1>

  <?php  ?>

  <?php
  $orgs=["google"];
  #,"aws","apple","facebook","microsoft"];
  ini_set('user_agent','UserAgent');
  #ini_set('Authorization','bearer ');
  foreach($orgs as $org){
    $json = file_get_contents('https://api.github.com/orgs/'.$org);
    $arr = json_decode($json,true);
    $member_json = file_get_contents(str_replace("{/member}","?per_page=100",$arr["public_members_url"]));
    $member_arr = json_decode($member_json,true);
  ?>

    <table border="1">
      <tr> <td rowspan="4"><img src=<?php echo $arr["avatar_url"]."&s=120" ?> /></td> <td><?php echo $arr["name"] ?></td> <td colspan="2"><?php echo $arr["location"] ?></td> </tr>
      <tr> <td colspan="3">GitHub URL：<a href=<?php echo $arr["html_url"] ?> > <?php echo $arr["html_url"] ?> </a></td> </tr>
      <tr> <td colspan="3">公式URL：<a href=<?php echo $arr["blog"] ?> > <?php echo $arr["blog"] ?> </a></td> </tr>
      <tr> <td>所属人数：<?php echo count($member_arr) ?></td> <td>リポジトリ数：<?php echo $arr["public_repos"] ?></td> <td>作成年：<?php echo explode("-",$arr["created_at"])[0] ?>年</td> </tr>
    </table>

  <?php } ?>

</body>
</html>
