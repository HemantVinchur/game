<?php
  //credit & debit
    include_once('../../../core/config.php');

    function transaction($type, $amt, $user_id){
      global $link;

      $sql="INSERT INTO wallet (amt, type, user_id) VALUES ('$amt', '$type', $user_id)";

      $result=mysqli_query($link,$sql);

      if ($result) {

        return mysqli_insert_id($link);
      }else {
        return false;
      }
    }

  //update_balance
  //fetch user's balance by user id

    function user_balance($id){
      global $link;

      $sql_credit = "SELECT SUM(amt) as credit_amt FROM wallet WHERE user_id='$id' AND type='credit'";
      $result=mysqli_query($link,$sql_credit);
      $row=mysqli_fetch_assoc($result);

      $total_credits=$row['credit_amt'];

      $sql_debit = "SELECT SUM(amt) as debit_amt FROM wallet WHERE user_id='$id' AND type='debit'";
      $result=mysqli_query($link,$sql_debit);
      $row=mysqli_fetch_assoc($result);

      $total_debits=$row['debit_amt'];

      $balance_amt=$total_credits-$total_debits;

      $sql="UPDATE users set balance='$balance_amt' where id='$id'";
      $result=mysqli_query($link,$sql);

      return $balance_amt;
    }

  ?>
