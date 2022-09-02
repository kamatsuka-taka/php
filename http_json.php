<?PHP
require './vendor/autoload.php';

// HTTP通信を管理する（リクエスト、レスポンス）
$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://www.jma.go.jp/',
]);

// リクエストを送信
$res = $cli->get('bosai/forecast/data/overview_forecast/130000.json');
$obj =  json_decode($res->getBody());

// 取得したコンテンツを出力
print_r($obj);
print'<br>';
print $obj['targetArea'];
print $obj['text'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form method="POST" action="http_json2.php"> -->
    <!-- <h3>天気予報</h3>
    <table>
        <tr>
        <th>天気</th>
        <th>時刻</th>
        </tr>
        <th>
            
        </th>
    </table> -->

<!-- </form>   -->
<?php
 print $_GET['text']; ?>
</body>
</html>

