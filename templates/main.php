<html lang="ja"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>規制</title>
<meta name="description" content="このウェブサイトは現在管理者によって規制されています。"/>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Content-Style-Type" content="text/css">
<link rel="stylesheet" href="block.css" type="text/css" charset="UTF-8">
<script src="jquery-1.12.0.min.js"></script>


<script>
$(function() {
  $('div#area01:contains("セキュリティ > サイバー攻撃対策")').css('background-color', '#fb9885');
  $('div#area01:contains("Security > Cyber Attack Protection")').css('background-color', '#fb9885');
});
</script>

<script>
(function(){
var _UA = navigator.userAgent;
if (_UA.indexOf('iPhone') > 0 || _UA.indexOf('iPod') > 0 || _UA.indexOf('Android') > 0) {
   document.write('<link rel="stylesheet" href="style_sp.css" type="text/css" charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1" />');
}else{
   document.write('<link rel="stylesheet" href="style.css" type="text/css" charset="UTF-8" />');
}
})();
</script><link rel="stylesheet" href="style.css" type="text/css" charset="UTF-8">


</head>

<body>
<div id="header">
<div class="logo_img"><img alt="InterSafe GatewayConnection" src="logo.PNG"></div>
</div>

<div id="area01">

<div id="Msg">
<div id="Msg_01">このウェブサイトは現在管理者によって規制されています。</div>
  <div id="Msg_02"></div>
  
</div>


<div class="box01 boxbg_01">
<div class="leftside">
<div class="boxttl">あなたがリクエストしたURL</div>
<div id="frm">
<?php if(isset($error_msg)){ ?>
	<p><?php echo strip_tags($error_msg); ?></p>
　　　　　<?php } ?>
	<form action="index.php" method="post" style="margin-bottom:0;">
		<input name="url" type="text" style="width:400px;" autocomplete="off" value="https://qiita.com"/>
		<input type="submit" value="Go"/>
	</form>
	<script type="text/javascript">
		document.getElementsByName("url")[0].focus();
	</script>		
</div>
</div>
</div>

<div class="box01 boxbg_02">
<div class="leftside">
<div class="boxttl">規制理由(カテゴリ)</div>
    <div id="categoryName_jp">コミュニケーション &gt; SNS・ミニブログ</div>
    <div id="categoryName_en">Internet Communication &gt; SNS And Microblogging</div>
</div>
</div>

<p>


</p><div class="spacer20px"></div>
</div>
</body>
</html>
