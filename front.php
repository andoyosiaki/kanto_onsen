<?php
session_start();
require_once __DIR__."/core/dbconect.php";
require __DIR__."/function/functions.php";

$onsens= $db->query('SELECT * FROM onsen ORDER BY id ASC');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>関東温泉</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header class="jumbotron-fluid header1">
		<div class="title">
			<h1 class="front_h1">関東温泉</h1>
		</div>
		<div class="author_box">
			<a href="login.php">管理画面</a>
		</div>
      <div class="container">
        <div class="serch_box">
					<form action="serch.php" method="post">
						<div class="form-group">
					    <label for="exampleSelect1exampleFormControlSelect1">エリアで探す</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="prefecture">
					      <option value="1">神奈川県</option>
					      <option value="2">静岡県</option>
					      <option value="3">山梨県</option>
					    </select>
							<div class="serch_btn">
							<button type="submit" class="btn btn-danger"> 送 信 </button>
							</div>
					  </div>
					</form>
        </div>
      </div>
			<div class="feature_box">
				<p class="feature_p">特徴別に探す</p>
			</div>
			<div class="type_wrapper-box">
				<div class="type_box type_0">
					<div class="media">
						<a href="type/type0.php" class="mr-3">
							<img src="img/eat.png" alt="メディアの画像">
						</a>
						<div class="media-body">
							<a href="type/type0.php"><h3 class="mt-0">食事処あり</h3></a>
							<p>温泉からあがって美味しい食事が頂けるお店はこちら。地域の食材を使ったひと手間くわえたメニューが沢山あります。</p>
						</div>
					</div>
				</div>
				<div class="type_box type_1">
					<div class="media">
						<a href="type/type1.php" class="mr-3">
							<img src="img/sauna.png" alt="メディアの画像">
						</a>
						<div class="media-body">
							<a href="type/type1.php"><h3 class="mt-0">サウナあり</h3></a>
							<p>サウナに入ってリフレッシュ！ミストサウナやドライサウナなど種類も沢山あります
						。今話題のロウリュもあるかも。</p>
						</div>
					</div>
				</div>
				<div class="type_box type_2">
					<div class="media">
						<a href="type/type2.php" class="mr-3">
							<img src="img/towel.png" alt="メディアの画像">
						</a>
						<div class="media-body">
							<a href="type/type2.php"><h3 class="mt-0">タオルのレンタル可能</h3></a>
							<p>出先で急に温泉に入りたくなってもタオル持ってない・・。そんなときでも大丈夫。タオルのレンタル/販売してる温泉はこちら。</p>
						</div>
					</div>
				</div>
			</div>
			<div class="type_wrapper-box down">
				<div class="type_box type_3">
					<div class="media">
						<a href="type/type3.php" class="mr-3">
							<img src="img/hot_stone.png" alt="メディアの画像">
						</a>
						<div class="media-body">
							<a href="type/type3.php"><h3 class="mt-0">岩盤浴あり</h3></a>
							<p>岩盤浴でじっくり体を温めてデトックス！基本は有料サービスですが、なかには無料で使える温泉も・・・。</p>
						</div>
					</div>
				</div>
				<div class="type_box type_4">
					<div class="media">
						<a href="type/type4.php" class="mr-3">
							<img src="img/open_bath.png" alt="メディアの画像">
						</a>
						<div class="media-body">
							<a href="type/type4.php"><h3 class="mt-0">露天風呂あり</h3></a>
							<p>温泉と言えばやっぱり露天風呂！大規模施設の色々な種類の露天風呂や、温泉地の静かな露天風呂まで多種多様にあります。</p>
						</div>
					</div>
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
	                  <p class="<?php echo prefecture($onsen['p_id']); ?>"><?php echo $onsen['prefecture']; ?></p>
	                </div>
	              <p class="front-img"><a href="detail.php?id=<?php echo $onsen['id']; ?>"><img src="img/<?php echo $onsen['picture_id']; ?>.jpg"></a></p>
	          </div>
	      </div>
	    <?php endwhile; ?>
	  </article>
	</div>
</body>
</html>
