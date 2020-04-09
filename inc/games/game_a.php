<div id="game_a">
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <div class="heading">
          <div class="card layer1">
            <form class="" action="methods/place_bid_game_a.php" method="post">
              <h3>coloumn A</h3>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="card layer1">
        <ul id="col_a_eles" class="float_wrapper">
          <?php
          for ($i = 0; $i <= 9; $i++) {
          ?>
            <li><?php echo $i ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <div class="heading">
          <div class="card layer1">
            <h3>coloumn B</h3>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="card layer1">
        <ul id="col_b_eles" class="float_wrapper">
          <?php
          for ($i = 0; $i <= 9; $i++) {
          ?>
            <li><?php echo $i ?></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="buttons_pane center">
        <button onclick="place_bid(this)" type="button" class="button lazy" type="submit">buy now</button>
      </div>
    </div>
    </form>
  </div>

</div>