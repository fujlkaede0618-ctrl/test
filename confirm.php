<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($_POST['company'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 確認画面</title>
    <script src="style.js"></script>


    <style>
        body{
            font-family: sans-serif;
        }

        .container{
            width: 800px;
            margin: 50px auto;
        }

        table{
            border-collapse: collapse;
        }

        th,td{
            border: 2px solid #666;
            padding: 8px;
        }

        th{
            width: 180px;
            background: #f5f5f5;
        }

        .btn{
            margin-top: 10px;
        }

        button{
            padding: 5px 15px;
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>お問い合わせフォーム - 確認画面</h1>

    <ul>
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
    </ul>

    <table>
        <tr>
            <th>お名前</th>
            <td><?= $name ?></td>
        </tr>

        <tr>
            <th>会社名</th>
            <td><?= $company ?></td>
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td><?= $email ?></td>
        </tr>

        <tr>
            <th>年齢</th>
            <td><?= $age ?></td>
        </tr>

        <tr>
            <th>お問い合わせ内容</th>
            <td><?= nl2br($message) ?></td>
        </tr>
    </table>

    <!-- 送信処理へ -->
    <form action="send.php" method="post" onsubmit="return checkForm();">

        <input type="hidden" name="name" id="name" value="<?= $name ?>">
        <input type="hidden" name="company" id="company" value="<?= $company ?>">
        <input type="hidden" name="email" id="email" value="<?= $email ?>">
        <input type="hidden" name="age" id="age" value="<?= $age ?>">
        <input type="hidden" name="message" id="message" value="<?= $message ?>">

        <div class="btn">
            <button type="submit">送信</button>
        </div>
    </form>

    <!-- 戻る -->
    <form action="contact.php" method="post">

    <input type="hidden" name="name" id="name" value="<?= $name ?>">
        <input type="hidden" name="company" id="company" value="<?= $company ?>">
        <input type="hidden" name="email" id="email" value="<?= $email ?>">
        <input type="hidden" name="age" id="age" value="<?= $age ?>">
        <input type="hidden" name="message" id="message" value="<?= $message ?>">
        <button type="button" onclick="history.back()">戻る</button>

    </form>

</div>

</body>
</html>