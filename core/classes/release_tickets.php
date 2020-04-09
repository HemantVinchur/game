<?php


  function release_ticket($game_type, $cola, $colb){
    global $link;

    echo $sql="INSERT INTO release_tickets (game_type, cola, colb) VALUES ('$game_type', '$cola', '$colb')";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }

?>
