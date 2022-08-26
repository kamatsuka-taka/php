<?php
require_once "../DbManager.php";
require_once "../selfphp/Encode.php";



try {
// DBに接続する
    $db = getDb();

// DB接続のコードはパターン化されているので、使いまわしても大丈夫
// 変にアレンジするとセキュリティの問題が起こるかも
// $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？）
    $stt = $db->prepare('INSERT INTO memo(name, memo) VALUES(:name,:memo)');

    // 穴あきのSQL文にフォームの文字を入れて完成させていく
    $stt->bindValue(':name', $_POST['name']);
    $stt->bindValue(':memo', $_POST['memo']);
    
    $stt->execute();

} catch(PDOException $e) {
    die("エラーメッセージ： {$e->getMessage()}");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<body>
<form method="POST" action="myform3.php">

    <h2>登録しました</h2>
    <input type="submit" value="登録">    
    
</body>
</html>