<?php include('include/header.php'); ?>
<div class="login">
<div class="shapp_login">
  <img class="pos1" src="img/bride.png" alt="">
  <img class="pos2" src="img/groom.png" alt="">
</div>
    <div class="login_box1 card_me">
    <div class="login_box2 conten_set">
      <div class="text-center">
      <img src="img/logo.png" alt="" class="img_r logo_login">
      </div>
      <h2 class="text-center">
       <!-- Welcome Back ! -->
      <span>Sign in to continue to</span>
      </h2>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Enter Email">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Enter Password">
      </div>
      <div class="form-group1">
      <a class="btn btn_theme btn-lg btn_r btn-block text_u" id="login_btn">Login</a>
      </div>
    </div>
  </div>
  
</div>
<?php include('include/footer.php'); ?>
<script>
  $("#login_btn").click(function(){
  $(".login").addClass("slide_us");
});
</script>