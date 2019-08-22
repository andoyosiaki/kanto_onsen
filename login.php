<?php
session_start();
require_once "core/dbconect.php";
require __DIR__."/function/functions.php";

if(!empty($_POST['name']) && !empty($_POST['password'])){
	$login = $db->prepare('SELECT * FROM users WHERE name=? AND password=?');
	$login->execute(array(
		$_POST['name'],
		sha1($_POST['password'])
	));
	$me = $login->fetch();

	if($me){
		$_SESSION['name'] = $me['name'];
		header('Location: insert.php');exit();
	}else {
		header('Location:front.php');
	}
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo title($_SERVER['PHP_SELF']); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript" src="inview/jquery.inview.min.js"></script>
	<script src="rellax/rellax.min.js"></script>
	<link rel="stylesheet" href="slick/slick.css">
	<link rel="stylesheet" href="slick/slick-theme.css">
	<link rel="stylesheet" href="animate/animate.min.css">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/main.js"></script>
</head>
<body>
<div class="login_form">
	<form class="" action="" method="post">
		<p>管理人専用</p>
		<input type="text" name="name" value="" placeholder="adress"><br>
		<input type="password" name="password" value="" placeholder="password"><br>
		<input type="submit" value="送信">
	</form>
</div>
</body>
</html>
