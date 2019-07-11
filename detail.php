<?php
require_once "core/dbconect.php";

$onsens = $db->prepare('SELECT * FROM onsen WHERE id=?');
$onsens->execute(array($_REQUEST['id']));
$onsen= $onsens->fetch();

require_once "functions/p_check.php";

  $w_time_opne =  mb_substr($onsen['w_time_opne'],0,5);
  $w_time_close =  mb_substr($onsen['w_time_close'],0,5);


  $h_a_fee = $onsen['h_a_fee'];
  $h_c_fee = $onsen['h_c_fee'];

// 割引url
  $jaf_url  = $onsen['jaf_url'];
  $nifty_url = $onsen['nifty_url'];
// mymap座標
  $map = "1UXV_NEtZycFB5aQ4_-54dC_G6Me2rsga&ll";
  $eq = "=";
  $adress = $onsen['map'];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php  echo $onsen['name']; ?></title>
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
  <link rel="stylesheet" href="css/detail.css">
	<script src="js/main.js"></script>
</head>
<body>

  <div class="jumbotron-fluid <?php echo $p_id; ?>">
    <div class="container header_box">
      <div class="header_text">
        <p><a href="front.php">関東温泉</a></p>
        <h3 class="d-h3"><?php echo $onsen['prefecture']; ?></h3>
      </div>
    </div>
  </div>
  <article>
      <div class="container section1">
          <div class="row">
              <div class="col-md-6">
                  <h1 class="animated"><?php echo $onsen['name']; ?></h1>
              </div>
              <div class="col-md-6">
                  <h2 class="animated">所在地:<?php echo $onsen['prefecture']; ?></h2>
                  <address class="animated">住所:<?php echo $onsen['adress']; ?></address>
              </div>
          </div>
          <p class="front-img">
            <img src="img/<?php echo $onsen['picture_id']; ?>.jpg" class="animated ">
          </p>
      </div>
      <div class="container btn_box">
        <div class="inner-btn_box">
          <button type="button" class="btn btn-outline-danger bg-danger  animated" id="blog"><a href="https://onsenfujisan.com/onsen/<?php echo $onsen['blog_url'];?>" target=”_blank”>温泉訪問レポート</button>
          <button type="button" class="btn btn-outline-dark animated"><a href="<?php echo $onsen['onsen_url'];?>" target=”_blank”>公式ホームページ</a></button>
        </div>
      </div>
      <div class="container info_section animated">
        <div class="row">
<!-- --------------------------- -->
<!-- 店舗情報 -->
<!-- --------------------------- -->
          <div class="col-12 col-md-6">
            <dl class="info_ul">
              <dt>店舗情報</dt>
              <dd>食事処：<?php echo $onsen['eat']; ?></dd>
              <dd>サウナ：<?php echo $onsen['sauna']; ?></dd>
              <dd>岩盤浴：<?php echo $onsen['hot_stone']; ?></dd>
              <dd>露天風呂：<?php echo $onsen['open_bath']; ?></dd>
              <dd>タオルのレンタルor販売：<?php echo $onsen['towel']; ?></dd>
              <dd class="text"><?php echo $onsen['towel_text']; ?></dd>
            </dl>
          </div>
<!-- --------------------------- -->
<!-- 料金 -->
<!-- --------------------------- -->
          <div class="col-12 col-md-6">
            <dl class="Fee_info">
              <dt>基本料金</dt>
              <dd class="before_info">平日・大人料金：<?php echo $onsen['w_a_fee'],"円"; ?></dd>
              <dd class="before_info">平日・子供料金：<?php echo $onsen['w_c_fee'],"円"; ?></dd>
              <dd class="after_info">休日・大人料金：<?php if($h_a_fee === ""){
                                                        echo "平日と同じ";
                                                      }else {
                                                        echo $onsen['h_a_fee'],"円";
                                                      } ?>
              </dd>
              <dd class="after_info">休日・子供料金：<?php if($h_c_fee === ""){
                                                        echo "平日と同じ";
                                                      }else {
                                                        echo $onsen['h_c_fee'],"円";
                                                      }?>
              </dd>
              <span class="info_text">( 詳しい料金体系は店舗公式ホームページをご覧下さい。)</span>
            </dl>
          </div>
        </div>
      </div>
<!-- --------------------------- -->
<!-- 営業時間 -->
<!-- --------------------------- -->
      <div class="container under-info_section animated">
        <div class="row">
          <div class="col-12 col-md-4">
            <dl class="open_time">
              <dt>営業時間</dt>
              <dd class="open_weekday">平日　<?php echo mb_substr($onsen['time_opne'],0,5); ?> - <?php echo mb_substr($onsen['time_close'],0,5); ?></dd>
              <dd class="open_holiday">休日　<?php if($w_time_opne === "00:00"){
                                                echo "同上";
                                              }else {
                                                echo mb_substr($onsen['h_time_opne'],0,5);
                                              }?>
                                              -
                                              <?php if($w_time_close === "00:00"){
                                                echo "";
                                              }else {
                                                echo mb_substr($onsen['h_time_close'],0,5);
                                              } ?>
              </dd>
            </dl>
          </div>
<!-- --------------------------- -->
<!-- 休店日 -->
<!-- --------------------------- -->
          <div class="col-12 col-md-4">
            <dl class="holiday">
              <dt>休店日</dt>
              <dd><?php echo $onsen['close']; ?></dd>
              <dd class="text"><?php echo $onsen['close_text']; ?></dd>
            </dl>
          </div>
<!-- --------------------------- -->
<!-- 割引情報 -->
<!-- --------------------------- -->
          <div class="col-12 col-md-4">
            <dl class="dis_info">
              <dt>割引情報</dt>
              <dd class="jaf">JAF割引：<?php if($jaf_url === ""): ?>
                          <?php echo "割引はありません"; ?>
                          <?php else: ?>
                          <a href="https://jafnavi.jp/web/facility.php?sisetu_id=<?php echo $onsen['jaf_url']; ?>">割引内容</a>
                          <?php endif; ?>
              </dd>
              <dd class="nifty">Nfty割引：<?php if($nifty_url === ""): ?>
                          <?php echo "割引はありません"; ?>
                          <?php else: ?>
                          <a href="https://onsen.nifty.com/<?php echo $onsen['nifty_url']; ?>">割引内容</a>
                        <?php endif; ?>
              </dd>
            </dl>
          </div>
          <div class="map">
            <iframe src=https://www.google.com/maps/d/embed?mid<?php echo $eq,$map,$eq,$adress; ?>></iframe>
          </div>
        </div>
      </div>
      <div class="return">
        <a href="front.php">戻る</a>
      </div>
  </article>
</body>
</html>
