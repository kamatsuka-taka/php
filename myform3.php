<?php

// ファイルの場所が教科書と違うかも
require_once '../selfphp/Encode.php';    //e関数の有効化
require_once '../DbManager.php';         //getDb関数の有効化
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモ登録確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
<tbody>
    <table class="table">
        <thead>
            <tr>
                <th>id</th><th>name</th><tr>record</tr><tr>memo</tr>
            </tr>
        </thead>

        <?php
    try {
        // データベースへの接続を確立
        $db = getDb();
        // SELECT命令の実行
        $stt = $db->prepare('SELECT * FROM memo ORDER BY memo ASC');
        $stt->execute();
        // 結果セットの内容に順を出力
        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
?>
<tr>
    <td><?=e($row['id']) ?></td>
    <td><?=e($row['name']) ?></td>
    <td><?=e($row['record']) ?></td>
    <td><?=e($row['memo']) ?></td>

</tr>
<?php
}
    } catch(PDOException $e) {
        die("エラーメッセージ：{$e->getMessage()}");
    }
    ?>
</tbody>
</table> 

<!-- <button type="button" class="btn btn-primary">優先</button> 
<br>
<button type="button" class="btn btn-danger">危険</button>
<br>
<button type="button" class="btn btn-warning">警告</button>
<br>
<button type="button" class="btn btn-success">成功</button>
<br>


</body>
</html> -->