<?PHP
// 相対パス注意
// composerでインストールしたライブラリを利用するために、autoloadをインポートする
require './vendor/autoload.php';

// HTTP通信を管理する（リクエスト、レスポンス）
$cli = new GuzzleHttp\Client([
    'base_uri' => 'https://wings.msn.to/',
]);

// リクエストを送信
$res = $cli->post( '/tmp/post.php', [
    'form_params' => [
        'name' => '佐々木蔵之介'
    ]
]);
// 取得したコンテンツを出力
print $res->getBody();
// print_r($res->getHeaders());