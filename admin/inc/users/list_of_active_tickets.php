<br><br>
<?php
  include_once('../core/config.php');
?>
<div class="heading">
  <div class="card layer1">
      <h3>List of Active tickets</h3>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ticket 1</th>
      <th scope="col">Ticket 2</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT * from release_tickets";

        $result=mysqli_query($link,$sql);
        while ($row=mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <th scope="row"><?php echo $row['id']?></th>
        <td><?php echo $row['cola']?></td>
        <td><?php echo $row['colb']?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
