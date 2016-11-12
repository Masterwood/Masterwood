<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>【サービス紹介】WEBの学習からWEBマーケティングの学習・コンサルティングならHYPER AMBITION｜ハイパーアンビション</title>
<meta name="description" content="「HYPER AMBITION」のサービスをご紹介。ハイパーアンビション"/>

<link href="../css/reset.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/main.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/second.css" media="all" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="../img/favicon.ico">
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/analyticstracking.php'); ?>
</head>
<body>
<header>
	<div class="log"><a href="/"><img src="../img/logo.jpg"></a></div>
</header>
<!-- グローバルナビ -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/global_menu/global_menu.php'); ?>
<!-- END グローバルナビ -->
<section>
<div class="container">
	<h1>【サービス紹介】HYPER AMBITION</h1>
	<h2 class="fl mb_30 font_B">プロによる質の高いWEB制作から、指導まで。</h2>
    <p class="clear_B">HYPER AMBITIONでは、東証一部上場企業のホームページ制作を行う人材が、WEB制作の指導から、WEB制作代行、ホームページを通して利益を得る仕組みづくりであるWEBマーケティングまで行います。</p>
	<h2 class="fl mt_50 mb_30 font_B">WEB制作・運用のレクチャー（学習指導）</h2>
	<div class="show-case clear_B">
        <div class="show-case-list">
            <a href="website-create.php"><img src="../img/second/business/imadesyo2.jpg">
            <p><strong>WEB制作指導</strong></p>
            </a>
        </div>
        <div class="show-case-list">
            <a href="website-run.php">
            <img src="../img/second/business/up2.jpg">
            <p><strong>WEB運用指導</strong></p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEBサイトの制作</h2>
    <div class="show-case clear_B">
        <div class="show-case-list">
            <a href="lp-create.php">
            <img src="../img/second/business/sales2.jpg">
            <p><strong>ランディングページ（LP）制作・運用代行</strong></p>
            </a>
        </div>
        <div class="show-case-list">
            <a href="website-agent-create.php">
            <img src="../img/second/business/cording2.jpg">
            <p><strong>WEB制作・運用代行</strong></p>
            </a>
        </div>
        <div class="show-case-list">
            <a href="owned_media.php">
            <img src="../img/second/business/ownmedia2.jpg">
            <p><strong>オウンドメディア制作・運用代行</strong></p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEB運用・集客のコンサルティング</h2>
    <div class="show-case clear_B">
        <div class="show-case-list">
            <a href="seo_policy.php"><img src="../img/second/business/seo.jpg">
            <p><strong>SEO施策のコンサルティング</strong></p>
            </a>
        </div>
        <div class="show-case-list">
            <a href="">
            <img src="../img/second/business/money.jpg">
            <p><strong>WEBマーケティングのコンサルティング</strong></p>
            </a>
        </div>
    </div>
    <p class="txt_C mt_30 clear_B">一台のパソコンから、世界まで</p>
    <h3 class="h1size">HYPER AMBITIONで、WEBを</h3>
</div>
<!--　フッターエリア
---------------------------------->
<footer>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/footer/footer.php'); ?>
</footer>
<!-- END フッターエリア
---------------------------------->
</section>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	//グローバルナビ
	$(function(){
	var menuBtn =$("#global"),
		menuContent = $("#nav");
	menuBtn.click(function(){
		menuContent.slideToggle();
	});
	$(window).resize(function(){
		var win = $(window).width(),
			p = 960;
		if(win >p){
			menuContent.show();
		}else{
			menuContent.hide();
		}
	});
	$("#nav > li").click(function(e){
		$(this).children('ul').slideToggle('fast').parent().siblings().children("ul:visible").hide('fast');
	});
});

</script>
</body>
</html>
