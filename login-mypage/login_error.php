<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>ログイン</title>
    <link rel="stylesheet" type="text/css" href="login_error.css">
</head>


<body>
<header>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
        <form action="mypage.php" method="post">
            <div class="redtext">
                <h1>メールアドレスまたはパスワードが間違っています</h1>
            </div>
            <div class="form_contents">
                <div class="mail">
                <label>メールアドレス</label><br>
                 <input type="text" class="formbox" size="70" name="mail">
            </div>
            <div class="password">
                <label>パスワード</label><br>
                <input type="passwprd" class="formbox" size="70" name="password">
            </div>
            <div class="loginbutton">
                <input type="submit" class="submit_button" size="35" value="ログイン">
            </div>
            </div>
        </form>
    </main>
    <footer>
©2018 InterNous.inc.All rights reserved
</footer> 
</body>

</html>