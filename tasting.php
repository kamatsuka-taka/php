<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>白ワインティスティング</title>
    <style>
        h3 {
            border: solid 1px;
            width: 150px;
        }
        .face, .shine, .color, .shade, .viscosity, .appearance,.fruit
         {
            border: solid 1px;
            width: 600px;
        }
        
    </style>
</head>
<body>
    <form method="POST" action="tasting2.php">
    
    <h3>外観</h3>
    <label for="face">清澄度：</label><br />
    <div class="face">
    <input type="checkbox" name="face" value="1" checked>澄んだ
    <input type="checkbox" name="face" value="2">やや濁った
    <input type="checkbox" name="face" value="3">濁った<br />
    </div>

    <label for="shine">輝き:</label><br />
    <div class="shine">
    <input type="checkbox" name="shine" value="1" checked>輝きのある
    <input type="checkbox" name="shine" value="2">落ち着いている
    <input type="checkbox" name="shine" value="3">もやがかかった<br />
    </div>

    <label for="color">色調：</label>
    <div class="color">
    <input type="checkbox" name="color" value="1" checked>グリーンがかった
    <input type="checkbox" name="color" value="2">レモンイエロー
    <input type="checkbox" name="color" value="3">イエロー<br />
    <input type="checkbox" name="color" value="4" >黄金色がかった
    <input type="checkbox" name="color" value="5">黄金色
    <input type="checkbox" name="color" value="6">トパーズ
    <input type="checkbox" name="color" value="7">アンバー（琥珀色）<br />
    </div>

    <label for="shade">濃淡：</label>
    <div class="shade">
    <input type="radio" name="shade" value="1" checked>薄い（無色に近い）
    <input type="radio" name="shade" value="2">淡い
    <input type="radio" name="shade" value="3">やや濃い<br />
    <input type="radio" name="shade" value="4" >濃い
    <input type="radio" name="shade" value="5">非常に濃い<br />
    </div>

    <label for="viscosity">粘性：</label>
    <div class="viscosity">
    <input type="radio" name="viscosity" value="1" checked>さらっとした
    <input type="radio" name="viscosity" value="2">やや軽い
    <input type="radio" name="viscosity" value="3">やや強い<br />
    <input type="radio" name="viscosity" value="4" >強い
    <input type="radio" name="viscosity" value="5">ねっとりした
    </div>

<label for="appearance">外観の印象:</label>
<div class="appearance">
    <input type="radio" name="appearance" value="1" checked>若い
    <input type="radio" name="appearance" value="2">軽い
    <input type="radio" name="appearance" value="3">よく熟した
    <input type="radio" name="appearance" value="4" >成熟度が高い
    <input type="radio" name="appearance" value="5">濃縮感が強い<br />
    <input type="radio" name="appearance" value="6" >やや熟成した
    <input type="radio" name="appearance" value="7">熟成した
    <input type="radio" name="appearance" value="8">酸化熟成のニュアンス
    <input type="radio" name="appearance" value="9" >酸化が進んだ
    <input type="radio" name="appearance" value="10">完全に酸化している
</div>

    <h3>香り</h3>
    <label for="impression">第一印象:</label>
    <select name="first impression">第一印象<br />
        <option hidden>選択してください</option>
        <option value="1">控えめ</option>
        <option value="2">しっかりと感じられる</option>
        <option value="3">力強い</option>
    </select>
    <div>特徴：</div>
    <label for="fruit">果実・花・植物：</label>
    <div class="fruit">
    <input type="radio" name="fruit" value="1" checked>レモン
    <input type="radio" name="fruit" value="2">グレープフルーツ
    <input type="radio" name="fruit" value="3">リンゴ
    <input type="radio" name="fruit" value="4">洋ナシ
    <input type="radio" name="fruit" value="5">花梨
    <input type="radio" name="fruit" value="6">桃
    <input type="radio" name="fruit" value="7">アプリコット
    <input type="radio" name="fruit" value="8">パイナップル
    <input type="radio" name="fruit" value="9">メロン
    <input type="radio" name="fruit" value="10">パッションフルーツ
    <input type="radio" name="fruit" value="11">バナナ
    <input type="radio" name="fruit" value="12">マンゴ
    <input type="radio" name="fruit" value="13">ライチ
    <input type="radio" name="fruit" value="14">くるみ
    <input type="radio" name="fruit" value="15">炒ったアーモンド
    <input type="radio" name="fruit" value="16">へーぜっるナッツ
    <input type="radio" name="fruit" value="17">マスカット
    <input type="radio" name="fruit" value="18">すいかずら
    <input type="radio" name="fruit" value="19">アカシア
    <input type="radio" name="fruit" value="20">白バラ
    <input type="radio" name="fruit" value="21">キンモクセイ
    <input type="radio" name="fruit" value="22">菩提樹
    <input type="radio" name="fruit" value="23">ミント
    <input type="radio" name="fruit" value="24">アニス
    <input type="radio" name="fruit" value="25">ヴェルヴェーヌ
    </div>


    <div>予算</div>
    <label for="price">予測金額</label>
    <input type="number" min="500" max="12000" name="budget">円<br />

    <div>統括コメント</div>
    <label for="total">統括</label>
    
    </form>
</body>
</html>