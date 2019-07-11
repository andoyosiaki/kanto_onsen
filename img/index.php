

<?php
require "core/dbconect.php";

  $name = $_POST['name'];
  $picture_id = $_POST['picture_id'];
  $prefecture = $_POST['prefecture'];
  $p_id = $_POST['pid'];
  $adress = $_POST['adress'];
  $eat = $_POST['eat'];
  $sauna = $_POST['sauna'];
  $towel = $_POST['towel'];
  $towel_text = $_POST['towel_text'];
  $hot_stone = $_POST['hot_stone'];
  $open_bath = $_POST['open_bath'];
  $time_opne = $_POST['time_opne'];
  $time_close = $_POST['time_close'];
  $w_time_opne = $_POST['w_time_opne'];
  $w_time_close = $_POST['w_time_close'];
  $h_time_opne = $_POST['h_time_opne'];
  $h_time_close = $_POST['h_time_close'];
  $w_a_fee = $_POST['w_a_fee'];
  $w_c_fee = $_POST['w_c_fee'];
  $h_a_fee = $_POST['h_a_fee'];
  $h_c_fee = $_POST['h_c_fee'];
  $close_text = $_POST['close_text'];
  $close = $_POST['close'];
  $jaf = $_POST['jaf_url'];
      $jaf_url = mb_substr($jaf,46);
  $nifty = $_POST['nifty_url'];
      $nifty_url = mb_substr($nifty,24);
  $onsen = $_POST['onsen_url'];
  $map = $_POST['map_url'];
      $map_url = mb_substr($map,30);
  $blog = $_POST['blog_url'];
      $blog_url = mb_substr($blog,31);

var_dump($p_id);


  $statement = $db->prepare('INSERT INTO onsen SET name=?,prefecture=?,p_id=?,adress=?,eat=?,sauna=?,towel=?,towel_text=?,hot_stone=?,open_bath=?,time_opne=?,time_close=?,w_time_opne=?,w_time_close=?,h_time_opne=?,h_time_close=?,w_a_fee=?,w_c_fee=?,h_a_fee=?,h_c_fee=?,close_text=?,close=?,jaf_url=?,nifty_url=?,onsen_url=?,map_url=?,blog_url=?,picture_id=?');
  $statement->execute(array($name,$prefecture,$p_id,$adress,$eat,$sauna,$towel,$towel_text,$hot_stone,$open_bath,$time_opne,$time_close,$w_time_opne,$w_time_close,$h_time_opne,$h_time_close,$w_a_fee,$w_c_fee,$h_a_fee,$h_c_fee,$close_text,$close,$jaf_url,$nifty_url,$onsen,$map_url,$blog_url,$picture_id));


$onsens= $db->query('SELECT * FROM onsen ORDER BY id DESC');

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
<article>
  <?php while ($onsen = $onsens->fetch()): ?>
    <p><a href="#"><?php echo $onsen['name']; ?></a></p>
  <?php endwhile; ?>
</article>



  </body>


</html>
