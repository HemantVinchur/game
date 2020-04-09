<?php
  include_once('../core/config.php');
  include_once('../core/classes/place_bids.php');
  include_once('../core/classes/wallet.php');

$cola = $_POST['cola'];
$colb = $_POST['colb'];

  $user_id=1;
  $amta=0;
  $amtb=0;
  echo $cola;

  if($cola==='null'){
    $cola=-1;
  }else{
    $amta=10;
  }

  if($colb==='null'){
    $colb=-1;
  }else{
    $amtb=10;
  }

  $amt=$amta+$amtb;
  $place_bid_id = place_game_bid('game_a',$cola, $colb,$user_id);
  $amt_debit = transaction('debit', $amt, $user_id)
?>
