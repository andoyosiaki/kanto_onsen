<?php
require_once "core/dbconect.php";
require __DIR__."/function/functions.php";

if(isset($_POST['prefecture'])){
	$prefecture = $db->prepare('SELECT * FROM onsen WHERE p_id=?');
	$prefecture->execute(array($_POST['prefecture']));
	$prefectures = $prefecture->fetch();

	$onsens = $db->prepare('SELECT * FROM onsen WHERE p_id=?');
	$onsens->execute(array($_POST['prefecture']));
}else {
	header('Location:front.php');
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
	<header class="jumbotron-fluid header2">
		<div class="container header_box">
			<div class="header_text">
				<p><a href="front.php">関東温泉</a></p>
				<h1 class="type_h1"><?php echo $prefectures['prefecture']; ?></h1>
			</div>
		</div>
	</header>
<div class="contaienr main_section">
  <article class="animated">
    <?php while ($onsen = $onsens->fetch()): ?>
      <div class="article_box animated">
          <div class="article_inner-box animated">
              <h2><a href="detail.php?id=<?php echo $onsen['id']; ?>"><?php echo $onsen['name']; ?></a></h2>
                <div class="p_box">
                  <p class=" <?php echo prefecture($onsen['p_id']); ?>"><?php echo $onsen['prefecture']; ?></p>
                </div>
              <p class="front-img"><a href="detail.php?id=<?php echo $onsen['id']; ?>"><img src="img/<?php echo $onsen['picture_id']; ?>.jpg"></a></p>
          </div>
      </div>
    <?php endwhile; ?>
  </article>

</div>
</body>
</html>
