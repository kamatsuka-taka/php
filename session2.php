<?php
session_start();
$_SESSION['email'] = $_POST['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>セッション情報保存</title>
</head>
<body>
    セッション情報を保存しました。
 <!--   <?php print $_SESSION['email']; ?>  -->
<form method="POST" action="session3.php">
    <input type="submit" value="保存" />
</form>
</body>
</html>