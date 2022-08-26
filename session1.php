<?php 
   require_once '../selfphp/Encode.php';
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>セッション情報</title>
</head>
<body>
    <form method="POST" action="session2.php">
        <label for="email">メールアドレス : </label>
<!-- バリューセッションemail ?? の意味がわからないうちは、入力しないほうが良い。説明できないから。 -->
    <input id="email" type="text" name="email" size="40" value="<?e($_SESSION['email'] ?? '') ?>" /> 
        <input type="submit" value="送信" />
    </form>
    
</body>
</html>