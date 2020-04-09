<form id="edit_user_form" action="#" method="post">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <div id="login">
          <div class="card layer1">
            <div class="card_wrapper">
              <div class="card_wrapper">
                <div class="input_group">
                  <div class="heading">
                    <h3>Update Profile</h3>
                  </div>
                </div>
                <br>
                <div class="input_group">
                  <input id="username" class="input" type="text" name="username" value="" required="">
                  <label for="">Username</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="password" class="input" type="password" name="password" value="" required="">
                  <label for="">Password</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="email" class="input" type="text" name="email" value="" required="">
                  <label for="">Email</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="contact" class="input" type="text" name="contact" value="" required="">
                  <label for="">Contact</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <input id="credit" class="input" type="text" name="credit" value="" required="">
                  <label for="">Add credit</label>
                  <span class="highlight"></span>
                </div>
                <br>
                <div class="input_group">
                  <button onclick="do_login(<?php echo $_GET['id'] ?>, this)" class="button" type="button" name="button">submit</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</form>
