<?php

try {


    require_once('../common/common.php');

    $post = sanitize($_POST);

    $onamae = $post['onamae'];
    $email = $post['email'];
    $postal = $post['postal'];
    $address = $post['address'];
    $tel = $post['tel'];
    $message = $post['message'];

// 接続設定
$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=estate;charset=utf8', $user, $pass);
$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO sales (onamae, email, postal, address, tel, message) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(1, $onamae, PDO::PARAM_STR);
$stmt->bindValue(2, $email, PDO::PARAM_STR);
$stmt->bindValue(3, $postal, PDO::PARAM_INT);
$stmt->bindValue(4, $address, PDO::PARAM_STR);
$stmt->bindValue(5, $tel, PDO::PARAM_INT);
$stmt->bindValue(6, $message, PDO::PARAM_STR);
$stmt->execute();
$dbh = null;

} catch (Exception $e) {
  print 'ただいま障害により大変ご迷惑をお掛けしております。: '.$e->getMessage();
  exit();
}

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ユーザー登録フォーム・登録ページ</title>
<style>
p {
  margin-left: 50px;
}
</style>
</head>





<body>
<?php print $onamae ?><br>
<?php print $email ?><br>
<?php print $postal ?><br>
<?php print $address ?><br>
<?php print $tel ?><br>
<?php print $message ?>
<p>ご登録ありがとうございました。</p>

</body>
</html>
