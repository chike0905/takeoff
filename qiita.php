<?php
function qiita(){
  $response = file_get_contents("https://qiita.com/api/v2/users/chike0905/items");
  $items = json_decode($response,true);
  $returns = [];
  foreach($items as $item){
    $return = [];
    $return["title"] = $item["title"];
    $tags = [];
    foreach($item["tags"] as $tag){
      $tags[] = $tag["name"];
    }
    $return["tag"] = $tags;
    $return["url"] = $item["url"];
    $returns[] = $return;
  }
  return $returns;
}

$items = qiita();

$dsn = 'mysql:dbname=xyz;host=localhost';
$user = 'xyz';
$password = 'chike0905';
try{
  $dbh = new PDO($dsn, $user, $password);
}catch (PDOException $e){
  print('Error:'.$e->getMessage());
  die();
}
$dbh->query('SET NAMES utf8');
foreach($items as $item){
  $stmt = $dbh->query('select * from qiita where url = "'.$item['url'].'"');
  if(empty($stmt->fetch(PDO::FETCH_ASSOC))){
    $sql = 'insert into qiita (title,url,tag1,tag2,tag3,tag4,tag5) values ("'.$item["title"].'","'.$item["url"].'","'.$item["tag"][0].'","'.$item["tag"][1].'","'.$item["tag"][2].'","'.$item["tag"][3].'","'.$item["tag"][4].'")';
    $flag = $dbh->query($sql);
    if ($flag){
      print('データの追加に成功しました<br>');
    }else{
      print('データの追加に失敗しました<br>');
    }
  }else{
    print("同じデータがすでに存在します");
  }
}
