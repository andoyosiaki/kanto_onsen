<?php
session_start();
require_once "core/dbconect.php";
require __DIR__."/function/functions.php";

if($_SESSION['name']){
  echo "ログイン完了";
}else {
  header('Location: front.php');exit();
}

 ?>
<<<<<<< HEAD
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
 <div class="contaienr" style='max-width:1000px; margin:0 auto;'>
   <h1>フォーム入力</h1>
   <p>入力</p>
   <form class="" action="index.php" method="post">
		<div class="name">
			<input type="text" name="name" value="" placeholder="店舗名">
		</div>
		<div class="picture_id">
			<input type="text" name="picture_id" value="" placeholder="写真番号">
		</div>
		<dl class="prefecture">
			<dt>県名</dt>
			<dd>神奈川県:　<input type="radio" name="prefecture" value="神奈川県" placeholder="" checked></dd>
			<dd>静岡県:　<input type="radio" name="prefecture" value="静岡県" placeholder=""></dd>
			<dd>山梨県:　<input type="radio" name="prefecture" value="山梨県" placeholder=""></dd>
		</dl>
		<dl class="pid">
			<input type="text" name="pid" value="" placeholder="県番号">
		</dl>
		<dl class="adress">
			<input type="text" name="adress" value="" placeholder="住所">
		</dl>
		<dl class="time">
			<p>営業時間『共通』</p>
			<input type="text" name="time_opne" value="" placeholder="">から<br>
			<input type="text" name="time_close" value="" placeholder="">まで
		</dl>
		<dl class="w_time">
			<p>営業時間『平日』</p>
			<input type="text" name="w_time_opne" value="" placeholder="">から<br>
			<input type="text" name="w_time_close" value="" placeholder="">まで
		</dl>
		<dl class="h_time">
			<p>営業時間『休日』</p>
			<input type="text" name="h_time_opne" value="" placeholder="">から<br>
			<input type="text" name="h_time_close" value="" placeholder="">まで
		</dl>
		<dl class="onsen_close">
			<dt>休業日</dt>
				<input type="text" name="close" value="" placeholder="土">
		</dl>
		<div class="onsen_close_text">
			<input type="text" name="close_text" value="" placeholder="休業日の補足">
		</div>
 		<dl class="eat">
 			<dt>食事処</dt>
 			<dd>ある:　<input type="radio" name="eat" value="◯" placeholder="" checked></dd>
 			<dd>ない:　<input type="radio" name="eat" value="×" placeholder=""></dd>
 		</dl>
 		<dl class="sauna">
 			<dt>サウナ</dt>
 			<dd>ある:　<input type="radio" name="sauna" value="◯" placeholder="" checked></dd>
 			<dd>ない:　<input type="radio" name="sauna" value="×" placeholder=""></dd>
 		</dl>
 		<dl class="towel">
 			<dt>タオルレンタル・販売</dt>
 			<dd>あり:　<input type="radio" name="towel" value="◯" placeholder="" checked></dd>
 			<dd>なし:　<input type="radio" name="towel" value="×" placeholder=""></dd>
 		</dl>
 		<div class="towel_text">
 			<input type="text" name="towel_text" value="" placeholder="タオル補足">
 		</div>
 		<dl class="hot_stone">
 			<dt>岩盤浴</dt>
 			<dd>ある:　<input type="radio" name="hot_stone" value="◯" placeholder="" checked></dd>
 			<dd>ない:　<input type="radio" name="hot_stone" value="×" placeholder=""></dd>
 		</dl>
 		<dl class="open_bath">
 			<dt>露天風呂</dt>
 			<dd>ある:　<input type="radio" name="open_bath" value="◯" placeholder="" checked></dd>
 			<dd>ない:　<input type="radio" name="open_bath" value="×" placeholder=""></dd>
 		</dl>
 		<dl class="jaf_url">
 			 <input type="text" name="jaf_url" value="" placeholder="JAF url">
 			<p>ない:　<input type="radio" name="jaf_url" value="ない" placeholder=""></p>
 		</dl>
 		<dl class="nifty_url">
 			 <input type="text" name="nifty_url" value="" placeholder="nifty url">
 			<p>ない:　<input type="radio" name="nifty_url" value="ない" placeholder=""></p>
 		</dl>
 		<dl class="onsen_url">
 			 <input type="text" name="onsen_url" value="" placeholder="温泉公式 url">
 			<p>ない:　<input type="radio" name="onsen_url" value="ない" placeholder=""></p>
 		</dl>
 		<dl class="map_url">
 			 <input type="text" name="map_url" value="" placeholder="goglemap url">
 		</dl>
 		<dl class="blog_url">
 			 <input type="text" name="blog_url" value="" placeholder="blog url">
 		</dl>
 		<dl class="w_fee">
 			平日大人<input type="text" name="w_a_fee" value="">
 			平日子供<input type="text" name="w_c_fee" value="">
 		</dl>
 		<dl class="h_fee">
 			休日大人<input type="text" name="h_a_fee" value="">
 			休日子供<input type="text" name="h_c_fee" value="">
 		</dl>
   	<button type="submit" name="button">送信</button>
   </form>
 </div>

 <div class="pn_box">
 		<a href="index.php">一覧へ</a>
 </div>
 </body>
 </html>
=======
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
	<link href="css/style.css" rel="stylesheet">
</head>
  <body>
    <div class="contaienr" style='max-width:1000px; margin:0 auto;'>
      <h1>フォーム入力</h1>
      <p>入力</p>
      <form class="" action="index.php" method="post">

  			<div class="name">
  				<input type="text" name="name" value="" placeholder="店舗名">
  			</div>

  			<div class="picture_id">
  				<input type="text" name="picture_id" value="" placeholder="写真番号">
  			</div>

  			<dl class="prefecture">
  				<dt>県名</dt>
  				<dd>神奈川県:　<input type="radio" name="prefecture" value="神奈川県" placeholder="" checked></dd>
  				<dd>静岡県:　<input type="radio" name="prefecture" value="静岡県" placeholder=""></dd>
  				<dd>山梨県:　<input type="radio" name="prefecture" value="山梨県" placeholder=""></dd>
  			</dl>
  			<dl class="pid">
  				<input type="text" name="pid" value="" placeholder="県番号">
  			</dl>
  			<dl class="adress">
  				<input type="text" name="adress" value="" placeholder="住所">
  			</dl>

  			<dl class="time">
  				<p>営業時間『共通』</p>
  				<input type="text" name="time_opne" value="" placeholder="">から<br>
  				<input type="text" name="time_close" value="" placeholder="">まで
  			</dl>
  			<dl class="w_time">
  				<p>営業時間『平日』</p>
  				<input type="text" name="w_time_opne" value="" placeholder="">から<br>
  				<input type="text" name="w_time_close" value="" placeholder="">まで
  			</dl>
  			<dl class="h_time">
  				<p>営業時間『休日』</p>
  				<input type="text" name="h_time_opne" value="" placeholder="">から<br>
  				<input type="text" name="h_time_close" value="" placeholder="">まで
  			</dl>

  			<dl class="onsen_close">
  				<dt>休業日</dt>
  					<input type="text" name="close" value="" placeholder="土">
  			</dl>
  			<div class="onsen_close_text">
  				<input type="text" name="close_text" value="" placeholder="休業日の補足">
  			</div>

    		<dl class="eat">
    			<dt>食事処</dt>
    			<dd>ある:　<input type="radio" name="eat" value="◯" placeholder="" checked></dd>
    			<dd>ない:　<input type="radio" name="eat" value="×" placeholder=""></dd>
    		</dl>
    		<dl class="sauna">
    			<dt>サウナ</dt>
    			<dd>ある:　<input type="radio" name="sauna" value="◯" placeholder="" checked></dd>
    			<dd>ない:　<input type="radio" name="sauna" value="×" placeholder=""></dd>
    		</dl>

    		<dl class="towel">
    			<dt>タオルレンタル・販売</dt>
    			<dd>あり:　<input type="radio" name="towel" value="◯" placeholder="" checked></dd>
    			<dd>なし:　<input type="radio" name="towel" value="×" placeholder=""></dd>
    		</dl>

    		<div class="towel_text">
    			<input type="text" name="towel_text" value="" placeholder="タオル補足">
    		</div>

    		<dl class="hot_stone">
    			<dt>岩盤浴</dt>
    			<dd>ある:　<input type="radio" name="hot_stone" value="◯" placeholder="" checked></dd>
    			<dd>ない:　<input type="radio" name="hot_stone" value="×" placeholder=""></dd>
    		</dl>

    		<dl class="open_bath">
    			<dt>露天風呂</dt>
    			<dd>ある:　<input type="radio" name="open_bath" value="◯" placeholder="" checked></dd>
    			<dd>ない:　<input type="radio" name="open_bath" value="×" placeholder=""></dd>
    		</dl>

    		<dl class="jaf_url">
    			 <input type="text" name="jaf_url" value="" placeholder="JAF url">
    			<p>ない:　<input type="radio" name="jaf_url" value="ない" placeholder=""></p>
    		</dl>

    		<dl class="nifty_url">
    			 <input type="text" name="nifty_url" value="" placeholder="nifty url">
    			<p>ない:　<input type="radio" name="nifty_url" value="ない" placeholder=""></p>
    		</dl>

    		<dl class="onsen_url">
    			 <input type="text" name="onsen_url" value="" placeholder="温泉公式 url">
    			<p>ない:　<input type="radio" name="onsen_url" value="ない" placeholder=""></p>
    		</dl>

    		<dl class="map_url">
    			 <input type="text" name="map_url" value="" placeholder="goglemap url">
    		</dl>

    		<dl class="blog_url">
    			 <input type="text" name="blog_url" value="" placeholder="blog url">
    		</dl>

    		<dl class="w_fee">
    			平日大人<input type="text" name="w_a_fee" value="">
    			平日子供<input type="text" name="w_c_fee" value="">
    		</dl>
    		<dl class="h_fee">
    			休日大人<input type="text" name="h_a_fee" value="">
    			休日子供<input type="text" name="h_c_fee" value="">
    		</dl>

      	<button type="submit" name="button">送信</button>
      </form>
    </div>

    <div class="pn_box">
    		<a href="index.php">一覧へ</a>
    </div>
  </body>
</html>
>>>>>>> 99163f2372bb69a6396a1ef85dca0768b3f0b6a0
