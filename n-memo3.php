<?php
require_once '../DbManager.php';
require_once '../selfphp/Encode.php';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memoの表示</title>
</head>

<body>
    <?php
    try {
        //データベースへの接続を確立
        $db = getDb();


        // DBの接続コードはパターン化されているので、使いまわしても大丈夫
        // 変にアレンジするとセキュリティの問題が起こるかも


        //select命令の準備、bookテーブルの全データを表示するSQLを作る
        //ASCが昇順DESCが降順
        $stt = $db->prepare('SELECT * FROM memo ORDER BY id ASC');
        // execute(); SQL文を実行する
        $stt->execute();

        //結果セットの内容を順に出力
        // while($row =) :連想配列を１行ずつ取り出す。
        //$stt->fetch(PDO::FETCH_ASSOC): 取得したデータを連想配列に変換する
        //ほかの項目を出力したかったら増やせばいい→<?= e($row['id'])>など
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    ?>
            <?= e($row['memo']) ?>
    <?php
        }
    } catch (PDOException $e) {
        // die();指定されたメッセージを出力したのち、スクリプトを強制終了する
        // (PDOException) PHP Data Object の例外
        // getMessage() 今回の場合だと、例外のメッセージを出しなさいよという意味
        die("エラーメッセージ:{$e->getMessage()}");
    }
    ?>
    <form method="POST" action="n-memo1.php">
        <input type="submit" value="追加" />
</body>

</html>