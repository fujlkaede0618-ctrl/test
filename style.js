
    function checkForm() {

        // 入力値を取得
        const name = document.getElementById("name").value;
        const companyName = document.getElementById("company").value;
        const email = document.getElementById("email").value;
        const age = document.getElementById("age").value;
        const message = document.getElementById("message").value;
    
        // 入力チェック
        if (
            name === "" ||
            companyName === "" ||
            email === "" ||
            age === "" ||
            message === ""
        ) {
            alert("必須項目が未入力です。入力内容をご確認ください。");
            return false;
        }
    
        // 確認ダイアログ
        const confirmMessage =
            "下記の内容を本当に送信しますか？\n\n" +
            "お名前 ➡ " + name + "\n" +
            "会社名 ➡ " + companyName + "\n" +
            "メールアドレス ➡ " + email + "\n" +
            "年齢 ➡ " + age + "\n" +
            "お問い合わせ内容 ➡ " + message;
    
        return confirm(confirmMessage);
    }