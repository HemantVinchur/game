<br><br>
<?php
  include_once('../core/config.php');
?>
<div class="heading">
  <div class="card layer1">
      <h3>List of withdrawl requests</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">user_id</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from wallet where type='debit'";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td><?php echo $row['user_id']?></td>
        <td><?php echo $row['amt']?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
