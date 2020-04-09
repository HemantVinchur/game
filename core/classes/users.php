<?php
  function add_user($username,$contact,$password,$email){
    global $link;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql="INSERT INTO users (nice_name, password, number, email) VALUES ('$username','$hashed_password','$contact','$email')";

    $result=mysqli_query($link,$sql);

    if ($result) {

      return mysqli_insert_id($link);
    }else {
      return false;
    }
  }
?>
