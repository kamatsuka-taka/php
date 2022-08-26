<?php
session_start();
$_SESSION['id'] = $_POST['id'];
?>
<?php
session_start();
$_SESSION['pass'] = $_POST['pass'];

if($_POST['id'] === ""){

    header('location: http://localhost/~itsys/PHP-class/0822check_form_back/form.php');
    exit();
}else{
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <title>確認画面</title>
</head>
<body>
    ID : <?php print $_SESSION['id']; ?>
    と
    パスワード :
    <?php print $_SESSION['pass']; ?>
    を確認しました。
    <form method="POST" action="form3.php">

        <input type="submit" value="保存">
    </form> 
</body>
</html>
<?php }; ?>