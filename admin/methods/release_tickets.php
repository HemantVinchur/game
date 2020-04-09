<?php
  include_once('../../core/config.php');
  include_once('../../core/classes/release_tickets.php');

$cola = $_POST['cola'];
$colb = $_POST['colb'];

  $place_bid_id = release_ticket('release_ticket',$cola, $colb);
?>
