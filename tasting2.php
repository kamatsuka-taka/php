<?php
require_once "./DbManager.php";
require_once "./Encode.php";

try {
    $db = getDb();


$stt = $db->prepare('INSERT INTO wine(face, shine, color, shade, viscosity, appearance, fruit) VALUES(:face, :shine, :color, :shade, :viscosity, :appearance, :fruit)');


$stt->bindValue(':face', $_POST['face']);
$stt->bindValue(':shine', $_POST['shine']);
$stt->bindValue(':color', $_POST['color']);
$stt->bindValue(':shade', $_POST['shade']);
$stt->bindValue(':viscosity', $_POST['viscosity']);
$stt->bindValue(':appearance', $_POST['appearance']);
$stt->bindValue(':fruit', $_POST['fruit']);

$stt->execute();
header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/tasting2.php');
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
    <title>送信</title>
</head>
<body>
<form method="POST" action="myform3.php">

    <h2>送信されました</h2>
    <input type="submit" value="登録">    
    
</body>
</html>
