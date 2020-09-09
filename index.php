<?php
    require_once("db_connect.php");
    echo date("Y/m/d H:i:s");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Cleanliness</title>

</head>
<body>
<!--ログインユーザー名を表示する-->
<div class="container mt-5">
<h3>こんにちは、ゲストさん。</h3>
<p>掃除したいところはどこですか？</p>

<form action="input_do.php" method="post" class="form-inline">
    <textarea type="textarea" name="place" cols="40" rows="1"></textarea>
    <select name="status">
        <option value="0" /* 0 = everyday */>毎日</option>
        <option value="1" /* 1 = everyweek */>毎週</option>
        <option value="2" /* 2 = everymonth */>毎月</option>
        <option value="unselected" selected>掃除する間隔</option>
    </select>
    <input type="submit" value="登録">
</form>

</div>
<div class="container mt-5">
<table class="table table-striped table-hover" border="2">
    <tr>
        <th>#</th>
        <th>掃除したい箇所</th>
        <th>間隔</th>
        <th>最後に掃除した時間</th>
    </tr>
    <tr>
        <td></td>
        <td>お風呂の排水溝</td>
        <td>1ヶ月</td>
        <td>2019.08.01</td>
    </tr>
    <tr>
        <td></td>
        <td>ケージの裏</td>
        <td>1週間</td>
        <td>2019.08.24</td>
    </tr>
</table>
</div>
</body>
</html>