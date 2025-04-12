<?php
// フォームが送信された場合
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームデータの取得
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $inquiry = filter_input(INPUT_POST, 'inquiry');
    $agreement = filter_input(INPUT_POST, 'agreement');

    // 入力値を安全にする関数
    function h($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    // バリデーション
    $errors = array();

    if (empty($name)) {
        $errors['name'] = "※名前は必須です。";
    }

    if (empty($email)) {
        $errors['email'] = "※メールアドレスは必須です。";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "※有効なメールアドレスを入力してください。（例：example@ex.com）";
    }

    if (empty($inquiry)) {
        $errors['inquiry'] = "※お問い合わせ内容は必須です。";
    }

    if (empty($agreement)) {
        $errors['agreement'] = "※当社のプライバシーポリシーに同意の上、チェックを入れて送信してください";
    }

    // エラーがない場合、メールを送信
    if (empty($errors)) {
        $to = "info@technosphere.co.jp";
        $subject = "株式会社テクノスフィアWebサイトのフォームよりお問い合わせがありました";
        $headers = "From: $email";
        // $headers = "From: $email". "\r\n";
        // $header .= "Return-Path: $email";
        $addParam = '-f' . $email;

        // メール本文
        $mailBody = "名前: $name\n";
        $mailBody .= "メールアドレス: $email\n";
        $mailBody .= "お問い合わせ内容:\n$inquiry\n";

        // メール送信
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");
        
        if (mb_send_mail($to, $subject, $mailBody, $headers, $addParam)) {
            header("Location: thanks");
            exit();
        } else {
            $errors['mail'] = '<p class="error">!! メールの送信に失敗しました。</p>';
            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社テクノスフィア</title>
    <meta name="description" content="株式会社テクノスフィアは大阪府を拠点に活動しているシステム開発の会社です。サービス内容のお問い合わせやご質問・ご相談は、当社のプライバシーポリシーに同意の上こちらのフォームよりご連絡ください。">
    <link rel="shortcut icon" href="assets/img/common/favicon.ico" type="image/x-icon">
    <!-- 最適化 -->
    <link rel="canonical" href="https://technosphere.co.jp/contact">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css  -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a72af8db61.js" crossorigin="anonymous"></script>
</head>
<body  class="firstLoadTrigger">
    <!-- header -->
    <?php require_once("header.php"); ?>

    <main>
        <div class="lower-mv">
            <h1>CONTACT</h1>
        </div>
        <div class="contact-wrap">
            <div class="s-container">
                <p class="contact-introtxt">サービス内容のお問い合わせやご質問・ご相談はこちらのフォームよりご連絡ください。<br>入力内容はすべて必須項目です。</p>
                <?php echo !empty($errors) ? '<p class="error">! メールフォームはまだ送信されていません</p>' : ''; ?>
                <?php echo isset($errors['mail']) ? $errors['mail'] : ''; ?>
                <form action="" method="post">
                    <div class="form-item">
                        <label for="name">お名前</label>
                        <input type="text" name="name" id="name" placeholder="山田太郎" value="<?php echo isset($name) ? h($name) : ''; ?>" required>
                        <p class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p>
                    </div>
                    <div class="form-item">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" placeholder="example@ex.com" value="<?php echo isset($email) ? h($email) : ''; ?>" required>
                        <p class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
                    </div>
                    <div class="form-item">
                        <label for="inquiry">お問合せ内容</label>
                        <textarea name="inquiry" id="inquiry" required><?php echo isset($inquiry) ? h($inquiry) : ''; ?></textarea>
                        <p class="error"><?php echo isset($errors['inquiry']) ? $errors['inquiry'] : ''; ?></p>
                    </div>
                    <div class="form-agreement-box">
                        <div class="form-agreement-bg">
                            <input type="checkbox" name="agreement" id="agreement" <?php echo isset($agreement) ? 'checked' : ''; ?> required>
                            <label for="agreement">当社の<a href="privacy" target="_blank" class="txt-link">プライバシーポリシー</a>に同意する</label>
                        </div>
                        <p class="error"><?php echo isset($errors['agreement']) ? $errors['agreement'] : ''; ?></p>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn m-auto"><span>SEND</span></button>
                    </div>      
                </form>
           </div>
        </div>


    </main>

    <!-- footer -->
    <?php require_once("footer.php"); ?>
    <!-- js -->
    <script src="assets/js/hamburger.js"></script>
    <script>
    $(function(){
        $("form").submit(function(){
            if(window.confirm('送信してよろしいですか？')) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
</body>
</html>