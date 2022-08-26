<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自分メモ</title>
</head>
<body>
    <form method="POST" action="myform2.php">

    <div>
        <label for="name">ユーザ名 :</label><br />
        <input id="name" type="text" name="name" size="40"><br />
        
        <label for="record">記載日 :</label><br />
        <input id="record" type="text" name="record" size="40"><br />
        
        <label for="memo">自分メモ :</label><br />
        <textarea name="memo" id="memo" cols="40" rows="10"></textarea>
     
    </div>

    <div>
        <input type="submit" value="登録">
    </div>
    </form>
    
</body>
</html>