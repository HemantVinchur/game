<?php


  function place_game_bid($game_type, $cola, $colb, $user_id){
    global $link;

    echo $sql="INSERT INTO game_bids (game_type, cola, colb, user_id) VALUES ('$game_type', '$cola', '$colb', $user_id)";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }

?>
