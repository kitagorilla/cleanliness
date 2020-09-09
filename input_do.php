<?php require_once("db_connect.php"); 
    var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    try{
        $statement= $db->prepare('INSERT INTO tasks SET place=?, status=?,pushed_at=NOW();');
        $statement->execute(array($_POST['place'],$_POST['status']));
        echo '掃除箇所を追加しました。';
    } catch(PDOException $e) {
        echo 'DB接続エラー: ' . $e->getMessage(); 
    }
?>
</body>
</html>