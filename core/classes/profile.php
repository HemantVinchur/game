<?php


  function profile($id,$username,$password,$email,$contact){
    global $link;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    echo $sql="UPDATE users SET nice_name='$username', password='$hashed_password', number='$contact', email='$email' WHERE id='$id'";
    mysqli_query($link,$sql);
   return mysqli_query($link,$sql);
  }


?>
