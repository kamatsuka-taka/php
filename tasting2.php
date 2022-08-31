<?php
require_once "./DbManager.php";
require_once "./Encode.php";

try {
    $db = getDb();


// $stt = $db->prepare('INSERT INTO wine(face, shine, color, shade, viscosity, appearance, impression, fruit, price, comment) VALUES(:face, :shine, :color, :shade, :viscosity, :appearance, :impression, :fruit, :price, :comment)');
$stt = $db->prepare('INSERT INTO wine(face, shine, color, shade, viscosity, appearance, fruit, price, comment) VALUES(:face, :shine, :color, :shade, :viscosity, :appearance,  :fruit, :price, :comment)');


$stt->bindValue(':face', $_POST['face']);
$stt->bindValue(':shine', $_POST['shine']);
$stt->bindValue(':color', $_POST['color']);
$stt->bindValue(':shade', $_POST['shade']);
$stt->bindValue(':viscosity', $_POST['viscosity']);
$stt->bindValue(':appearance', $_POST['appearance']);
// $stt->bindValue(':impression', $_POST['impression']);
$stt->bindValue(':fruit', $_POST['fruit']);
$stt->bindValue(':price', $_POST['price']);
$stt->bindValue(':comment', $_POST['comment']);

// print_r($stt);

$stt->execute();

<<<<<<< HEAD
//    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
=======
header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/tasting2.php');

>>>>>>> 3d8547869e9df176ca8c07de980b73f105ecd01d
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
<form method="POST" action="tasting3.php">

    <h2>送信されました</h2>
    <input type="submit" value="登録">    
    
</body>
</html>
