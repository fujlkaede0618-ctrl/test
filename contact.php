<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="contact-container">
    <h1>お問い合わせフォーム</h1>

    <ul class="menu">
        <li><a href="#">トップページ</a></li>
        <li><a href="#">人気投稿</a></li>
        <li><a href="#">エンジニアおすすめ商品</a></li>
        <li><a href="#">エンジニアおすすめ記事</a></li>
        <li><a href="#">投稿ページ</a></li>
    </ul>

    <form action="confirm.php" method="post" onsubmit="return checkForm();">
        <table>
            <tr>
                <th>お名前</th>
                <td>
                    <input type="text" id="name" name="name">
                </td>
            </tr>

            <tr>
                <th>会社名</th>
                <td>
                    <input type="text" name="company" id="companyName">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="email" name="email" id="email">
                </td>
            </tr>

            <tr>
                <th>年齢</th>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    <textarea name="message" rows="8" placeholder="お問い合わせ内容" id="message"></textarea>
                </td>
            </tr>
        </table>

        <button type="submit">送信</button>

    </form>
    <button id="changeColorBtn">押してみてね！</button>
</div>
<footer id="footer"></footer>

<script src="style.js"></script>
</body>
</html>