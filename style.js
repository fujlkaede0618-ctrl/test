
    function checkForm() {

        // 入力値を取得
        const name = document.getElementById("name").value;
        const companyName = document.getElementById("companyName").value;
        const email = document.getElementById("email").value;
        const age = document.getElementById("age").value;
        const message = document.getElementById("message").value;
    
    
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
        // 全て入力されている場合のみ確認ダイアログ
    if (!confirm("この内容で送信します。よろしいですか？")) {
        return false;   // キャンセル
    }

    return true;        // OKなら送信
}


    const button = document.querySelector("#changeColorBtn");
const footer = document.querySelector("#footer");

if (button && footer) {

    const colors = ["blue", "red", "yellow", "gray"];
    let index = 0;

    button.addEventListener("click", () => {
        footer.style.backgroundColor = colors[index];
        index = (index + 1) % colors.length;
    });

}