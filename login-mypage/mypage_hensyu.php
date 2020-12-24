<?php
mb_internal_encoding("utf8");
session_start();
if(!isset($_SESSION['id'])){
header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    
    <body>
        <header>
            <div class="logo">
                <img src="4eachblog_logo.jpg">
            </div>
            <div class="logout">
                <a href="login.php">ログアウト</a>
            </div>
        </header>
        <main>
            <div class="box">
                <h2>会員情報</h2>
                <div class="hello">
                    <p><?php echo "こんにちは！".$_SESSION['name']."さん";?></p>
                </div>
            <form action="mypage_update.php" method="post">
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class="basic_info">
                    <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name']; ?>"name="name"></p>
                    <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'] ?>" name="mail"></p>  
                    <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password']; ?>"name="password"></p>
                    <input type="hidden" value="<?php echo rand(1,10);?>"name="from_mypage_hensyu">
                </div>
                <div class="text">
                    <textarea rows="3" cols="70" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
                <div class="loginbutton">
                        <input type="submit" class="submit_button" size="35" value="編集する">
                </div>  
            </form>
            </div>
        </main>
        <footer>
            ©2018 InterNous.inc.All rights reserved
        </footer>
    </body>
</html>