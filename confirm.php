<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit();
}
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['companyName'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');


// フォーム以外からアクセスされた場合
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit();
}

// POSTデータ取得
$name = trim($_POST["name"]);
$companyName = trim($_POST["companyName"]);
$email = trim($_POST["email"]);
$age = trim($_POST["age"]);
$message = trim($_POST["message"]);

// 入力チェック
if (
    $name == "" ||
    $companyName == "" ||
    $email == "" ||
    $age == "" ||
    $message == ""
) {
    echo "必須項目が未入力です。入力内容をご確認ください。";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 確認画面</title>
    


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
            border: 3px solid #666;
            padding: 8px;
        }

        th{
            width: 180px;
            background: #f5f5f5;
        }

        /* 送信ボタン */
input[type="submit"] {
    width: 60x;
    font-size: 16px;
    cursor: pointer;
}

input[id="button"] {
    width: 60x;
    font-size: 16px;
    cursor: pointer;
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
            <td><?= $companyName ?></td>
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
        <input type="hidden" name="companyName" id="companyName" value="<?= $companyName ?>">
        <input type="hidden" name="email" id="email" value="<?= $email ?>">
        <input type="hidden" name="age" id="age" value="<?= $age ?>">
        <input type="hidden" name="message" id="message" value="<?= $message ?>">

        <div class="btn">
            <input type="submit" value="送信"></input>
        </div>
    </form>

    <!-- 戻る -->
    <form action="contact.php" method="post">

    <input type="hidden" name="name" id="name" value="<?= $name ?>">
        <input type="hidden" name="companyName" id="companyName" value="<?= $companyName ?>">
        <input type="hidden" name="email" id="email" value="<?= $email ?>">
        <input type="hidden" name="age" id="age" value="<?= $age ?>">
        <input type="hidden" name="message" id="message" value="<?= $message ?>">
        <input type="button" onclick="history.back()" id="button" value="戻る">

    </form>

</div>
<script src="style.js"></script>
</body>
</html>