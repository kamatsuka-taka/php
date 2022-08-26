<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>セッション情報登録</title>
</head>
<body>
 登録しました。
 <?php print $_SESSION['email']; ?> 
 <form method="POST" action="session1.php">
    <input type="submit" value="戻る" />
 </form>  
</body>
</html>