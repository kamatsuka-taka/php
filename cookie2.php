<?php setcookie('id', $_POST['id'], time() + 10); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />   
    <title>ID</title>
</head>
<body>
 確認しました。
 <?php print $_POST['id']; ?>
 <form method="POST" action="cookie3.php">


    <input type="submit" value="確認" />
 </form>  

</body>
</html>