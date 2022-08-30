
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talk</title>
</head>
<body>
    <form method="POST" action="talk2.php">
    <div>
        <label for="name">ユーザ名 :</label><br />
        <input id="name" type="text" name="name" size="40"><br />
        
        <label for="day">記載日 :</label><br />
        <input id="day" type="text" name="day" size="40"><br />
        
        <label for="talk">トーク :</label><br />
        <textarea name="talk" id="talk" cols="40" rows="10"></textarea>
     
    </div>
        <input type="submit" value="送信">
    </form>
</body>
</html>
