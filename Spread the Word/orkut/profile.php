<html>
<head>
<style>
body {
background: url('<?php
$fcontents = join ('', file ('style/img/profile-bg/profile-bg.txt'));
$s_con = split("~",$fcontents);
$banner_no = rand(0,(count($s_con)-1));
echo $s_con[$banner_no];
?>') scroll -0px -0px no-repeat;
	overflow: hidden
}
a {
	color: #02679c;
	text-decoration: none
}
a:hover {
	color: #00344f;
	text-decoration: underline
}
.profile_promo {
	background:url(style/img/div.png) no-repeat;
	overflow: hidden;
	font-size: 10px;
	color: #999;
	width: 372px;
	padding: 10px;
	padding-top:45px;
	font-family: Verdana, Geneva, sans-serif;
	cursor: auto
}
</style>
</head>
<body>
<div class="profile_promo">
  <hr color="#CCCCCC" size="1">
  <script type="text/javascript" src="http://www.christnotes.org/syndicate.php?content=dbv&amp;type=js2&amp;tw=auto&amp;tbg=FFFFFF&amp;bw=0&amp;bc=000000&amp;ta=C&amp;tc=000000&amp;tf=Arial&amp;ts=14&amp;ty=&amp;va=C&amp;vc=999999&amp;vf=Arial&amp;vs=14&amp;tt=1&amp;trn=NIV"></script>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
</body>
</html>