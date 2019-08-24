<?php
function prefecture($prefecture){
  switch ($prefecture) {
    case 1:
      $p_id = "kanagawa";
      break;
    case 2:
      $p_id = "sizuoka";
      break;
    case 3:
      $p_id = 'yamanasi';
  }
    return $p_id;
}



function fee($fee){
  if($fee === ''){
    echo "平日と同じ";
  }else {
    echo $fee.'円';
  }
  return $fee;
}

function openclose($time){
return  $newtime =  mb_substr($time,0,5);
}

function Opnetimes($wto,$hto){
  $new_wto = openclose($wto);
  $new_hto = openclose($hto);

  if($new_wto === '00:00'){
    echo "同上";
  }else {
    echo $new_hto;
  }
}

function Closetime($wtc,$htc){
  $new_wtc = mb_substr($wtc,0,5);
  $new_htc = mb_substr($htc,0,5);

  if($new_wtc === '00:00'){
    echo "";
  }else {
    echo $new_htc;
  }
}

function jaf($jaf){
  if($jaf === ''){
    echo "割引内容はありません";
  }else {
    ?><a href="https://jafnavi.jp/web/facility.php?sisetu_id=<?php echo $jaf; ?>">割引内容</a><?php
  }
  return $jaf;
}

function nifty($nifty){
  if($nifty === ''){
    echo "割引内容はありません";
  }else {
    ?><a href="https://onsen.nifty.com/<?php echo $nifty; ?>">割引内容</a><?php
  }
  return $nifty;
}
