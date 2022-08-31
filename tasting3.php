<?PHP
require_once './Encode.php';
require_once './DbManager.php';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>白ワインティスティング</title>
</head>

<body>
    <tbody>
    <tbody class="table">
        <thead>
            <tr>
                <!-- <th>id</th> -->
                <th>face</th>
                <th>shine</th>
                <th>color</th>
                <th>shade</th>
                <th>viscosity</th>
                <th>appearance</th>
                <th>fruit</th>
                <th>price</th>
                <th>comment</th>
            </tr>
        </thead>

        <?php
        try {
            $db = getDb();

            $stt = $db->prepare('SELECT * FROM wine ORDER BR wine ASC');
            $stt->execute();

            while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                <!-- <td><?=e($row['id']) ?></td> -->
                <td><?=e($row['face']) ?></td>
                <td><?=e($row['shine']) ?></td>
                <td><?=e($row['color']) ?></td>
                <td><?=e($row['shade']) ?></td>
                <td><?=e($row['viscosity']) ?></td>
                <td><?=e($row['appearance']) ?></td>
                <td><?=e($row['fruit']) ?></td>
                <td><?=e($row['price']) ?></td>
                <td><?=e($row['comment']) ?></td>
                </tr> 
                <?php
}
    } catch(PDOException $e) {
        die("エラーメッセージ：{$e->getMessage()}");
    }
    ?>

            
        


    </tbody>
    </table>

</body>

</html>