<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>【WEB制作】WEBのコーチングとコンサルティングならHYPER AMBITION｜ハイパーアンビション</title>
<meta name="description" content="WEB制作をどう始めたらいいかわからない人に、WEB制作をコーチングします。メンターとしての利用もできるし、コンサルティングも受けられる！「HYPER AMBITION」のWEB制作のコーチング・コンサルティングサービスをご紹介。ハイパーアンビション"/>

<link href="../css/reset.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/main.css" media="all" rel="stylesheet" type="text/css"/>
<link href="../css/second.css" media="all" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="../img/favicon.ico">
<?php include($_SERVER['DOCUMENT_ROOT'].'/layout/analyticstracking.php'); ?>
</head>
<body>
<header>
	<div class="log"><a href="http://masterwood.sakura.ne.jp/"><img src="../img/logo.jpg"></a></div>
</header>
<!-- グローバルナビ -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/global_menu/global_menu.php'); ?>
<!-- END グローバルナビ -->
<section>
<div class="container">
	<h1>【WEB制作】WEBならHYPERAMBITION</h1>
	<div class="txt_C">
		<img src="../img/second/business/imadesyo2.jpg" alt="WEB制作のコーチング">
	</div>
	<h2 class="mb_30 font_B">WEB制作のコーチング</h2>
    <p class="clear_B">HYPER AMBITIONでは、メールやチャットワークを通して、１対１でWEBの作り方をレクチャーします。初めてWEBサイトを作る方でも十分に力をつけていただくために、初歩から着実にご指導いたします。わからない点があっても、１対１でのレクチャーで気軽に質問できるので、プログラミング学習サイトにはない長所があります。</p>
	<h2 class="mt_50 mb_30 font_B">WEB制作のメンター</h2>
		<p class="">初めてWEBを制作する、あるいは、WEBサイトをすでに制作しているけど、コンテンツの盛り上げ方がわからない人に、マイルストーンとなる目標を示します。この目標を達成していけば、あなたのWEB制作スキルは着実に上達していくことでしょう。</p>
	<h2 class="mt_50 mb_30 font_B">WEB制作のコンサルティング</h2>
		<p class="">既に運用しているサイトが、検索順位も上がらず、離脱率も高くて、思うように運用できていない方向けに、コンサルティングを行います。</p>
		<h2 class="fl mt_50 mb_30 font_B">WEB制作・運用のレクチャー（コーチング）</h2>
				<div class="lineup clear_B">
        <div class="lineup-list">
            <a href="website-create.php"><img src="../img/second/business/imadesyo2.jpg" alt="WEB制作">
            <p>WEB制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="website-run.php">
            <img src="../img/second/business/up2.jpg" alt="WEB運用">
            <p>WEB運用</p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEBサイトの制作</h2>
    <div class="lineup clear_B">
        <div class="lineup-list">
            <a href="lp-create.php">
            <img src="../img/second/business/sales2.jpg" alt="LP制作">
            <p>ランディングページ（LP）制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="website-agent-create.php">
            <img src="../img/second/business/cording2.jpg" alt="WEB制作">
            <p>WEB制作</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="owned_media.php">
            <img src="../img/second/business/ownmedia2.jpg" alt="オウンドメディア">
            <p>オウンドメディア</p>
            </a>
        </div>
    </div>
    <h2 class="fl mt_50 mb_30 font_B">WEB運用・集客のコンサルティング</h2>
    <div class="lineup clear_B">
        <div class="lineup-list">
            <a href="seo_policy.php"><img src="../img/second/business/seo.jpg" alt="SEO施策">
            <p>SEO施策</p>
            </a>
        </div>
        <div class="lineup-list">
            <a href="">
            <img src="../img/second/business/money.jpg" alt="集客">
            <p>集客</p>
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
