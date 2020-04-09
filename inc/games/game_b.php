<div id="game_a">
  <div class="container">
    <br>
    <div class="row">
      <div class="col-sm-6">
        <div class="heading">
          <div class="card layer1">
            <form class="" action="methods/place_bid_game_b.php" method="post">
              <h3>Game B</h3>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="card layer1">
        <ul id="col_a_eles" class="float_wrapper">
          <?php
            for ($i = 1; $i <= 100; $i++) {

              if ($i % 2 === 0) {
                $class_name='light';
              }else {
                $class_name='';
              }

              if ($i < 10) {
                $sup=0;
              }else {
                $sup='';
              }
          ?>

              <li class="<?php echo $class_name ?>"><?php echo $sup.$i ?></li>
            <?php } ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="buttons_pane center">
        <button onclick="place_bid(this)" type="button" class="button lazy" type="submit">buy now</button>
      </div>
    </div>
    </form>
  </div>

</div>
