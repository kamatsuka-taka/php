<?php
require_once '../DbManager.php';
require_once '../selfphp/Encode.php';


try {
  // データベースへの接続を確立
  $db = getDb();

  // INSERT(登録）命令の準備    memoのカラムに値を入れる意味  prepare(前もって準備する)
  $stt = $db->prepare('INSERT INTO memo(memo) VALUES(:memo)');
  // memoのカラムにPOSTで取得したテキストを入れる  bind（値を結びつける）
  $stt->bindValue(':memo', $_POST['memo']);
  // INSERT（登録）命令を実行
  $stt->execute();

    // 処理後は入力フォームにリダイレクト p377の上
  //  header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/n-memo3.php');
} catch(PDOException $e) {
      // die();指定されたメッセージを出力したのち、スクリプトを強制終了する
    // (PDOException) PHP Data Object の例外
    // getMessage() 今回の場合だと、例外のメッセージを出しなさいよという意味
  die("エラーメッセージ：{$e->getMessage()}");
}

// 上記、nさんからのcodeにhtmlを追加記入してみた。
?>
<!--<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Memo</title>
</head>
<body>
    Memo : <?php print $_POST['memo']; ?> 
    
    <form method="POST" action="n-memo3.php">

        <input type="submit" value="保存">
    </form> 
</body>
</html> -->