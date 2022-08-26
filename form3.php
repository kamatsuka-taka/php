<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>登録画面</title>
</head>
<body>
    <?php print $_SESSION['id']; ?>
    
    <?php print $_SESSION['pass']; ?>
    
</body>
</html>