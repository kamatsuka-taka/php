<?php
require_once "../DbManager.php";
require_once "../selfphp/Encode.php";

try {
// DBに接続する
    $db = getDb();

// DB接続のコードはパターン化されているので、使いまわしても大丈夫
// 変にアレンジするとセキュリティの問題が起こるかも
// $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？）
    $stt = $db->prepare('INSERT INTO talk(name, day, talk) VALUES(:name, :day, :talk)');

    // 穴あきのSQL文にフォームの文字を入れて完成させていく
    $stt->bindValue(':name', $_POST['name']);
    $stt->bindValue(':day', $_POST['day']);
    $stt->bindValue(':talk', $_POST['talk']);
    
    $stt->execute();


    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
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
<form method="POST" action="talk3.php">

    <h2>登録しました</h2>
    <input type="submit" value="登録">    
    
</body>
</html>