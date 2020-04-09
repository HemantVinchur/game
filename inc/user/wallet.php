<br><br>
<?php
  include_once('core/config.php');
?>

	<div class='container'>
		<div class='jumbotron'>
<div class="balance">
            <?php
                $sql="SELECT * from users where id = 1";

                $res=mysqli_query($link,$sql);
                while ($row=mysqli_fetch_assoc($res)) {
              ?>
          <h3>Balance: <?php echo $row['balance'] ?> INR </h3><br>
          <?php } ?>
          </div>


          <div class="heading">
            <div class="card layer1">
                <h2>Transaction history</h2>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
              <h2><th scope="col">Transactions</th></h2>
                <h2><th scope="col">Amount</th></h2>
                <h2><th scope="col">Status</th></h2>
                <h2><th scope="col">Comments</th></h2>
              </tr>
            </thead>
            <tbody>
              <?php
                  $sql="SELECT * from wallet where id = 1";

                  $result=mysqli_query($link,$sql);
                  while ($row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <h2><th scope="row"><?php echo $row['type'] ?></th></h2>
                  <h2><td><?php echo $row['amt'] ?></td></h2>
                  <h2><td><?php echo "Success" ?></td></h2>
                  <h2><td><?php echo " " ?></td></h2>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        </div>
