
<?php
require "core/dbconect.php";

echo   $name = $_POST['name'],'<br>';
echo   $picture_id = $_POST['picture_id'],'<br>';
echo   $prefecture = $_POST['prefecture'],'<br>';
echo   $p_id = $_POST['pid'],'<br>';
echo   $adress = $_POST['adress'],'<br>';
echo   $eat = $_POST['eat'],'<br>';
echo   $sauna = $_POST['sauna'],'<br>';
echo   $towel = $_POST['towel'],'<br>';
echo   $towel_text = $_POST['towel_text'],'<br>';
echo   $hot_stone = $_POST['hot_stone'],'<br>';
echo   $open_bath = $_POST['open_bath'],'<br>';
echo   $time_opne = $_POST['time_opne'],'<br>';
echo   $time_close = $_POST['time_close'],'<br>';
echo   $w_time_opne = $_POST['w_time_opne'],'<br>';
echo   $w_time_close = $_POST['w_time_close'],'<br>';
echo   $h_time_opne = $_POST['h_time_opne'],'<br>';
echo   $h_time_close = $_POST['h_time_close'],'<br>';
echo   $w_a_fee = $_POST['w_a_fee'],'<br>';
echo   $w_c_fee = $_POST['w_c_fee'],'<br>';
echo   $h_a_fee = $_POST['h_a_fee'],'<br>';
echo   $h_c_fee = $_POST['h_c_fee'],'<br>';
echo $close_text = $_POST['close_text'],'<br>';
echo  $close = $_POST['close'],'<br>';
  $jaf = $_POST['jaf_url'];
    echo  $jaf_url = mb_substr($jaf,46),'<br>';
 $nifty = $_POST['nifty_url'];
  echo  $nifty_url = mb_substr($nifty,24),'<br>';
echo  $onsen = $_POST['onsen_url'],'<br>';
  $map = $_POST['map_url'];
  echo   $map_url = mb_substr($map,80),'<br>';
  $blog = $_POST['blog_url'];
  echo   $blog_url = mb_substr($blog,31),'<br>';



  $statement = $db->prepare('INSERT INTO onsen SET name=?,map=?,picture_id=?,prefecture=?,p_id=?,adress=?,eat=?,sauna=?,towel=?,towel_text=?,hot_stone=?,open_bath=?,time_opne=?,time_close=?,w_time_opne=?,w_time_close=?,h_time_opne=?,h_time_close=?,w_a_fee=?,w_c_fee=?,h_a_fee=?,h_c_fee=?,close_text=?,close=?,jaf_url=?,nifty_url=?,onsen_url=?,blog_url=?');

  $statement->execute(array($name,$map_url,$picture_id,$prefecture,$p_id,$adress,$eat,$sauna,$towel,$towel_text,$hot_stone,$open_bath,$time_opne,$time_close,$w_time_opne,$w_time_close,$h_time_opne,$h_time_close,$w_a_fee,$w_c_fee,$h_a_fee,$h_c_fee,$close_text,$close,$jaf_url,$nifty_url,$onsen,$blog_url));

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
