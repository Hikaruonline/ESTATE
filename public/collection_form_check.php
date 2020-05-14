<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ESTATE - COLLECTION</title>
    <meta name="description" content="ネックレスなどのジュエリーも扱うブライダル専門店">

<!-- css -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <div id="menu" class="big-bg">
    <div class="greenGreen">
      <header class="page-header wrapper">
          <h1 class="container_d">
              ESTATE
          </h1>
          <!--<p class="box"></p>-->

          <nav class="atom">
              <ul class="main-nav">
                <li><a href="index.html">Top</a></li>
                <li><a href="news.html">News</a></li>
                <li><a href="bridal.html">Bridal</a></li>
                <li><a href="jewellery.html">Jewellery</a></li>
                <li><a href="stores_tokyo.html">Stores</a></li>
                <li><a href="contact.html">contact</a></li>
              </ul>
              <!--  <p class="double-bottom"></p>-->
          </nav>

      </header>
    </div>
<div id="menu" class="big-bg">
</div><!-- /#home --><br>
<div class="menu-content wrapper">
<!--    <h2 class="page-title">Order</h2>
    <p>オーダー</p>-->
</div><!-- /.menu-content -->
<br>
<h3 class="honbunright">お問い合わせ<br>
＜商品、サービスに関するお問い合わせ><br></h3>
<br>
  <?php

  require_once('../common/common.php');

  $post = sanitize($_POST);

  $onamae = $post['onamae'];
  $email = $post['email'];
  $postal = $post['postal'];
  $address = $post['address'];
  $tel = $post['tel'];
  $message = $post['message'];

  $okflg = true;

  if ($onamae == '') {
    print 'お名前が入力されていません。<br><br>';
    $okflg = false;
  } else {
    print 'お名前<br>';
    print $onamae;
    print '<br><br>';
  }

  if (preg_match('/\A[\w\\.]+\@[\w\\.]+\.([a-z]+)\z/',$email)==0) {
    print 'メールアドレスを正確に入力してください。<br><br>';
    $okflg = false;
  } else {
    print 'メールアドレス<br>';
    print $email;
    print '<br><br>';
  }

  if (preg_match('/\A[0-9]+\z/',$postal)==0) {
    print '郵便番号は半角数字で入力してください。<br><br>';
    $okflg = false;
  } else {
    print '郵便番号<br>';
    print $postal;
    print '<br><br>';
  }


  if ($address == '') {
    print '住所が入力されていません。<br><br>';
    $okflg = false;
  } else {
    print '住所<br>';
    print $address;
    print '<br><br>';
  }

  if (preg_match('/\A\d{2,5}-?\d{2,5}-?\d{4,5}\z/',$tel)==0) {
    print '電話番号を正確に入力してください。<br><br>';
    $okflg = false;
  } else {
    print '電話番号<br>';
    print $tel;
    print '<br><br>';
  }

  if ($message == '') {
    print 'お問い合わせ内容が入力されていません。<br><br>';
    $okflg = false;
  } else {
    print 'お問い合わせ内容<br>';
    print $message;
    print '<br><br>';
  }


  if ($okflg == true) {
    print '<form method="post" action="collection_form_done.php">';
    print '<input type="hidden" name="onamae" value="'.$onamae.'">';
    print '<input type="hidden" name="email" value="'.$email.'">';
    print '<input type="hidden" name="postal" value="'.$postal.'">';
    print '<input type="hidden" name="address" value="'.$address.'">';
    print '<input type="hidden" name="tel" value="'.$tel.'">';
    print '<input type="hidden" name="message" value="'.$message.'">';

    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK"><br>';
    print '</form>';
  } else {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  }

  ?>
</body>
</html>
<footer class="kakuninn">
   <div class="wrapper">

       <p><small>Copyright © ESTATE Co., ltd. All rights reserved.</small></P>
   </div>
</footer>
