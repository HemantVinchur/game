<?php
  include_once('../core/config.php');
  include_once('../core/classes/place_bids.php');
  include_once('../core/classes/wallet.php');
  $col = $_POST['col'];
  $colarr=str_split($col);

  $cola=$colarr[0];
  $colb=$colarr[1];

  $user_id=1;
  $place_bid_id = place_game_bid('game_b',$cola, $colb,$user_id);
  if($colarr){
    $amt=10;
    $amt_debit = transaction('debit', $amt, $user_id);
  }
?>
