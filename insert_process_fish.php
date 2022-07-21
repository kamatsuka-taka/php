<?php
require_once './DbManager.php';

try {

    $db = getDb();
// $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？）
    $stt = $db->prepare('INSERT INTO fish(id, name, color, enter, cook) VALUE(:id, :name, :color, :enter, :cook)');

    // 穴あきのSQL文にフォームの文字を入れて完成させていく
    $stt->bindValue(':id', $_POST['id']);
    $stt->bindValue(':name', $_POST['name']);
    $stt->bindValue(':color', $_POST['color']);
    $stt->bindValue(':enter', $_POST['enter']);
    $stt->bindValue(':cook', $_POST['cook']);

    $stt->execute();
    
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form_fish.php');
} catch(PDOException $e) {
    die("エラーメッセージ： {$e->getMessage()}");
}