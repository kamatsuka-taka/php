<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの登録</title>
</head>
<body>
    <form action="insert_process_fish.php" method="post">
        <div>
            <label for="id">ID：</label><br/>
            <input id="id" type="text" name="id" size="25" maxlength="20" />
            </div>
        <div>
            <label for="name">名前：</label><br/>
            <input id="name" type="text" name="name" size="35" maxlength="150" />
        </div>
        <div>
            <label for="color">色：</label><br>
            <input id="color" type="text" name="color" size="6" maxlength="205" />
        </div>
        <div>
            <label for="enter">日にち：</label><br/>
            <input id="enter" type="text" name="enter" size="25" maxlength="30" />
            </div>
        <div>
            <label for="cook" >料理：</label><br/>
            <input id="cook" type="text" name="cook" size="15" maxlength="10" />
        </div>
        <div>
        <input type="submit" value="登録" /> 
        </div>   
        </form>
</body>
</html>