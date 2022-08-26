<?php
   require_once '../selfphp/Encode.php';
   session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>入力フォーム</title>
</head>
<body>
   <form method="POST" action="form2.php">

   <?php if($_SESSION['id_error']===true)
   { print "入力必須です" ;} ?>
   <label for="id">ID : </label>
   <input id="id" type="text" name="id" size="30" value="<?=e($_SESSION['id'] ?? '') ?>" />
    <br/>  
   <label for="pass">PASS : </label>
   <input id="pass" type="text" name="pass" size="30" value="<?php print e($_SESSION['pass'] ?? '') ?>" />
   <input type="submit" value="送信" /> 
   </form>
</body>
</html>