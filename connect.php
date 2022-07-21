<?php
// ほかのファイルを呼び出す
require_once './DbManager.php';
// DB接続時には、毎ファイル必要！


 try {
    // 呼び出したファイルのコード
    $db = getDb();
     
     

     // この専用のインスタンスによって繋がった！
     print '接続しました。';
 } catch (PDOException $e){
     die("接続エラー：｛$e->getMessage()}");
 } finally {
     $db = null;
 }
