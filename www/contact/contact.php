<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>【お問い合わせ】　WEBマーケティングのコンサルティングなら「HYPER AMBITION」｜ハイパーアンビション</title>
<meta name="description" content="「HYPER AMBITION」へのレクチャー・コンサルティングのお問い合わせ・申し込みはこちらから"/>
<meta name="robots" content="noindex"/>
<link href="/css/reset.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/css/main.css" media="all" rel="stylesheet" type="text/css"/>
<link href="/css/contact.css" media="all" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="/img/favicon.ico">
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/analyticstracking.php'); ?>
</head>
<body>
<header>
  <div class="log"><a href="/"><img src="../img/logo.jpg"></a></div>
</header>
<div class="container">
  <h1 class="mainhedding mt_15">お問い合わせ</h1>
  <div id="formWrap">
  <p class="mb_15 mt_30 ml_3 mr_3">下記フォームに必要事項を入力後、確認ボタンを押してください。</p>
  <form method="post" action="mail.php" class="ml_3 mr_3">
    <table class="formTable">
      <tr>
        <th>氏名 ※必須</th>
        <td><input size="20" type="text" name="氏名" placeholder="例：田中樹里" /></td>
      </tr>
      <tr>
        <th>Email（半角）※必須</th>
        <td><input size="30" type="text" name="Email" placeholder="例：tanaka@gmail.com" /></td>
      </tr>
      <tr>
        <th>あなたの現在</th>
        <td><select name="スキル">
            <option value="">選択してください</option>
            <option value="WEB未経験">WEB未経験</option>
            <option value="個人のホームページを運用している">
            個人のホームページを運用している</option>
            <option value="企業のホームページを運用している">企業のホームページを運用している</option>
            <option value="これから個人or企業のサイトを制作・運用しようとしている">
            これから個人or企業のサイトを制作・運用しようとしている</option>
          </select></td>
      </tr>
      <tr>
        <th>希望コース ※複数選択可</th>
        <td><input name="受講希望コース[]" type="checkbox" value="サイト制作のコーチング" /> サイト制作のコーチング　
          <input name="受講希望コース[]" type="checkbox" value="WEBマーケティングのコーチング" /> WEBマーケティングのコーチング"
          <input name="受講希望コース[]" type="checkbox" value="SEOのコーチング" /> SEOのコーチング
        </td>
      </tr>
      <tr>
        <th>お問い合わせ内容<br /></th>
        <td><textarea name="お問い合わせ内容" cols="50" rows="5"></textarea></td>
      </tr>
    </table>
    <p align="center" class="bottom mb_50">
      <input type="submit" value="　 確認 　"  class="submit_bottom" />　<input type="reset" value="リセット"  class="reset_bottom" />
    </p>
  </form>
</div>
</div>
<!--　フッターエリア
--------------------------------->
<footer>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/footer/footer.php'); ?>
</footer>
<!-- END フッターエリア
--------------------------------->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>
