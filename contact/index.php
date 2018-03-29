<!DOCTYPE HTML>
<html lang="ja"><!-- 日本語-->
<head>
<meta charset="utf-8">
<title>密眼堂-お問い合わせ-</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css"><!--CSS 対応-->
<link rel="stylesheet" href="sp.css"><!--CSS 対応-->
<link rel="stylesheet" href="../css/footer.css"><!--footerのcss-->
<link rel="stylesheet" href="../css/header.css"><!--headerのcss-->
<link rel="stylesheet" href="../css/footersp.css"><!--footerのcss-->
<link rel="stylesheet" href="../css/headersp.css"><!--headerのcss-->
<meta name="robots" content="noindex,nofollow,noarchive">
<link rel="shortcut icon" href="../favicon/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="../js/respond.js"></script>
<script src="../js/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/mitumedou/header/index.html'); ?>
	<div id="main">
		<div id="main_s">
			<img src="./sozai/otoiawase.png">
		</div>
	</div>
	<div id="sub">
		<div id="sub_s">
			<table border="0">
				<tr>
					<td>お名前</td>
					<tr>
					<td colspan="2"><input type="text" name="name"style="background-color:#000;;color:#F2F2F2"></td>
					</tr>
					<tr>
					<td>メールアドレス</td>
					</tr>
					<tr>
					<td colspan="2"><input type="text" name="mail"style="background-color:#000;;color:#F2F2F2"><td>
					</tr>
					<tr>
					  <td>お問い合わせ内容</td>
					</tr>
					<tr>
					  <td colspan="2"><textarea rows="10" cols="60" type="text" name="comment"style="background-color:#000;;color:#F2F2F2"></textarea></td>
					</tr>
				</tr>
				<input type="hidden" id="sendDate" name="送信日時">
				</tr>
				<tr>
					<td colspan="2"><a>送信</a></td>
				</tr>
			</table>
		</div>
	</div>
	<footer>
		<?php include( $_SERVER['DOCUMENT_ROOT'] . '/mitumedou/footer/footer.html'); ?>
	</footer>
</body>
</html>
